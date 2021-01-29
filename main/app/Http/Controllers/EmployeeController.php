<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
    
        $employee = Employee::all();
        return view('pages.employee' ,  compact('employee'));
    
    }

    public function show($id){
    
        $empl = Employee::findOrFail($id);
        return view('pages.employee-show' , compact('empl'));
    
    }
}