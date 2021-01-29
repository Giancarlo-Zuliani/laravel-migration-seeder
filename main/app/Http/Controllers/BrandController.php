<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Location;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        
        return view('pages.home' ,compact('brands'));
    }
    public function show($id){
        $brand = Brand::findOrFail($id);
        return view('pages.brand' , compact('brand'));
    }
}
