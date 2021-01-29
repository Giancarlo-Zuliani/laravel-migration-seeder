@extends('layouts.main-layouts')

@section('content')
    <h1>Employees</h1>
    <ul>
        @foreach($employee as $emp)
                <li>
                   <a href="{{ route('employees-show' , $emp -> id) }}"> {{ $emp -> name}} , {{ $emp -> lastname}} </a>
                </li>
        @endforeach
    </ul>

 @endsection