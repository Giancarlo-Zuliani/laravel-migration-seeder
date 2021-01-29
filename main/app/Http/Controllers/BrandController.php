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
}
