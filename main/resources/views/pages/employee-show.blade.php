@extends('layouts.main-layouts')

    @section('content')
        <h2>{{$empl -> name}}</h2>
        <h4>{{$empl-> lastname}}</h4>
        <h4> {{$empl -> date_of_hiring}} </h4>
    @endsection
