<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function index(){
        
        $location = Location::all();
        return view('pages.location' , compact('location'));

    }

    public function show($id){
 
        $loc = Location::findOrFail($id);
        return view('pages.location-show' , compact('loc'));
 
    }
}