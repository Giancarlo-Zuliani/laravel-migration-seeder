@extends('layouts.main-layouts')

@section('content')
    <h1>Brands</h1>
    <ul>
        @foreach($employee as $emp)
                <li>
                   <a href="{{ route('employees-show' , $emp -> id) }}"> {{ $emp -> name}} </a>
                </li>
        @endforeach
    </ul>

 @endsection