<?php

namespace App\Http\Controllers\Properties;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use App\Models\State;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){

        $data['properties'] = PropertyDetail::with('country', 'property_type')
            ->latest()->paginate(12);

        return view('home.properties.index', $data);
    }

    public function show($id){
        $data['property'] = PropertyDetail::with('country', 'property_type', 'user')
            ->findOrFail($id);

        return view('home.properties.show', $data);
    }

    public function getPropertyTypes(){
        $types = PropertyType::orderBy('name')->get();
        return response()->json([
            'success' => true,
            'property_types' => $types
        ], 200);
    }

    public function getStates(){
        $states = State::orderBy('name')->get();
        return response()->json([
            'success' => true,
            'states' => $states
        ], 200);
    }

    public function getCountries(){
        $countries = Country::orderBy('name')->get();
        return response()->json([
            'success' => true,
            'countries' => $countries
        ], 200);
    }
}
