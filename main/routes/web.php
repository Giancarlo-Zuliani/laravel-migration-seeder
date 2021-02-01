<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index')
    -> name('home');

Route::get('/brand','BrandController@index')
    -> name('brand-index');

Route::get('/brand/{id}','BrandController@show')
    -> name('brand-show');

Route::get('/employees' , 'EmployeeController@index')
    -> name('employees-index');

Route::get('/employees/{id}' ,'EmployeeController@show')
    -> name('employees-show');

Route::get('/location' , 'LocationController@index')
    -> name('location-index');

Route::get('location/{id}' , 'LocationController@show')
    -> name('location-show');

Route::get('/new/brand' , "BrandController@create" )
    -> name('create-brand');

Route::post('/new/brand/store' , 'BrandController@store') 
    -> name ('store-brand') ;  