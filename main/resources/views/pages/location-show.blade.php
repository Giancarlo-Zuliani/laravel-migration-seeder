@extends('layouts.main-layouts')

    @section('content')

        <h2>{{$loc -> name}}</h2>
        <h2>{{$loc -> address}}</h2>
        <h2>{{$loc -> num_of_employees}}</h2>

        
    @endsection
