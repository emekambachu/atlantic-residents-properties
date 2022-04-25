<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Properties\PropertyDetail;
use App\Models\Properties\PropertyType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $data['properties'] = PropertyDetail::with('country', 'property_type')
            ->latest()->limit(6)->get();
        $data['countries'] = Country::orderBy('name')->get();
        $data['property_types'] = PropertyType::orderBy('name')->get();

        return view('home.index', $data);
    }

    public function locations(){

        return view('home.properties.locations');
    }
}
