<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/','BrandController@index')
    -> name('brand-index');

Route::get('/brand/{id}','BrandController@show')
    -> name('brand-show');

Route::get('/employees' , 'EmployeeController@index')
    -> name('employees-index');

Route::get('/employees/{id}' ,'EmployeeController@show')
    -> name('employees-show');