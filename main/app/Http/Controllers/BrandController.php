<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;


class BrandController extends Controller

{

    public function index(){

        $brands = Brand::all();
        return view('pages.brand' ,compact('brands'));

    }

    public function show($id){

        $brand = Brand::findOrFail($id);
        return view('pages.brand-show' , compact('brand'));

    }
    public function create(){

        return view('pages.brand-create');
    }

    public function store(Request $request){
     $newbrand = new Brand;
     $newbrand -> name = $request -> get('name');
     $newbrand -> logo = $request -> get('logo');
     $newbrand -> phone_number = $request -> get('phone_number');
     $newbrand -> num_of_location = $request -> get('num_of_location');


     $newbrand -> save();
     return redirect() -> route('home');    
    }
}
