<?php

namespace App\Http\Controllers;

use App\Models\Properties\PropertyPhoto;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\State;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as InterventionImage;
use Illuminate\Support\Facades\File;

class UserAccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('users.index');
    }

    public function getProfile(){
        $profile = User::findOrFail(Auth::user()->id);
        return response()->json([
            'success' => true,
            'profile' => $profile
        ], 200);
    }

    public function updateProfile(Request $request){

        $user = User::findOrFail(Auth::user()->id);

        $input = $request->all();
        $rules = array(
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'mobile' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        if($request->hasFile('image') && $file = $request->file('image')){
            $path = 'photos/users/';
            if(!File::exists($path)){
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            $name = time() . $file->getClientOriginalName();
            // create canvas background to hold the image (Must install Image Intervention Package first)
            // $background = InterventionImage::canvas(500, 270);
            // start image conversion (Must install Image Intervention Package first)
            $convert_image = InterventionImage::make($file->path());
            // resize image and save to converted path
            // resize and fit width
            $convert_image->resize(700, 700, static function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // insert image to canvas
            // $background->insert($convert_image, 'center');
            $convert_image->save($path . '/' . $name);
            $input['image'] = $name;
        }else{
            $input['image'] = $user->image;
        }

        $user->update($input);

        return response()->json([
            "success" => true,
            "message" => "Profile updated"
        ]);
    }

    public function submitProperty(Request $request){
        $input = $request->all();
        $rules = array(
            'property_type_id' => 'required',
            'country_id' => 'required',
            'state_id' => 'nullable',
            'title' => 'required|string|unique:property_details,title',
            'address' => 'required',
            'description' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        $input['user_id'] = Auth::user()->id;
        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;

        $property = PropertyDetail::create($input);

        // Submit images using for loop
        if(!empty($request->images)){
            for($i = 0, $count = count($request->images); $i < $count; $i++){
                if(isset($request['images'][$i])){
                    $file = $request->file('images')[$i];
                    $path = 'photos/properties';
                    if (!File::exists($path)){
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    $name = time() . $file->getClientOriginalName();
                    //Move image to photos directory
                    $file->move($path, $name);
                }else{
                    $name = null;
                }

                // Submit photos
                PropertyPhoto::create([
                    'property_detail_id' => $property->id,
                    'image' => $name,
                ]);
            }
        }

        return response()->json([
            "success" => true,
            "message" => "Property submitted successfully"
        ]);
    }

    public function myProperties(){
        $properties = PropertyDetail::with('state', 'property_type', 'property_reviews', 'property_photos')
            ->where('user_id', Auth::user()->id)->get();

        if($properties->count() > 0){
            return response()->json([
                "success" => true,
                "properties" => $properties
            ]);
        }

        return response()->json([
            "success" => false,
        ]);
    }

    public function myPropertyEdit($id){
        $property = PropertyDetail::with('property_type', 'country', 'property_photos')->findOrFail($id);

        $images = [];
        if(count($property->property_photos) > 0){
            foreach($property->property_photos as $photo){
                $images[] = $photo->image;
            }
        }

        return response()->json([
            "success" => true,
            "property" => $property,
            "images" => $images,
        ]);
    }

    public function myPropertyUpdate(Request $request, $id){

        $property = PropertyDetail::findOrFail($id);
        $input = $request->all();
        $rules = array(
            'property_type_id' => 'required',
            'country_id' => 'required',
            'state_id' => 'nullable',
            'title' => 'required|string|unique:property_details,title,'.$id,
            'address' => 'required',
            'description' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'living_rooms' => 'required|numeric',
            'cost' => 'required|numeric',
            'features' => 'nullable',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        $input['features'] = !empty($request['features']) ? implode(', ',(array) $request['features']) : Null;

        $property->update($input);

        // add property photos to oldPhotos array
        $oldPhotos = [];
        foreach($property->property_photos as $photo){
            $oldPhotos[] = $photo->image;
        }

        $propertyPhotos = new PropertyPhoto();

        // Add any new images that were recently uploaded
        if(!empty($request->images)){
            for($i = 0, $count = count($request->images); $i < $count; $i++){
                if(isset($request['images'][$i]) && !in_array($request['images'][$i], $oldPhotos)){
                    $file = $request->file('images')[$i];
                    $path = 'photos/properties';
                    if (!File::exists($path)){
                        File::makeDirectory($path, $mode = 0777, true, true);
                    }
                    $name = time() . $file->getClientOriginalName();
                    //Move image to photos directory
                    $file->move($path, $name);

                    // Submit photos
                    $propertyPhotos->create([
                        'image' => $name,
                        'property_detail_id' => $property->id,
                    ]);
                }
            }
        }

        // Delete images that were not part of the recently uploaded batch
        foreach($property->property_photos as $photo){
            if(!in_array($photo->image, $request->images) && File::exists(public_path() . '/photos/properties/' . $photo->image)){
                FILE::delete(public_path() . '/photos/properties/' . $photo->image);
                $propertyPhotos->where('id', $photo->id)->delete();
            }

        }

        return response()->json([
            "success" => true,
            "message" => "Property updated"
        ]);
    }

    public function deleteProperty($id){
        $property = PropertyDetail::findOrFail($id);

        if(!empty($property->image1) && File::exists(public_path() . '/photos/properties/' . $property->image1)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image1);
        }
        if(!empty($property->image2) && File::exists(public_path() . '/photos/properties/' . $property->image2)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image2);
        }
        if(!empty($property->image3) && File::exists(public_path() . '/photos/properties/' . $property->image3)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image3);
        }
        if(!empty($property->image4) && File::exists(public_path() . '/photos/properties/' . $property->image4)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image4);
        }
        if(!empty($property->image5) && File::exists(public_path() . '/photos/properties/' . $property->image5)) {
            FILE::delete(public_path() . '/photos/properties/' . $property->image5);
        }

        $property->delete();

        return response()->json([
            "success" => true,
            "message" => "Deleted"
        ]);
    }
}
