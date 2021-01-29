@extends('layouts.main-layouts')

@section('content')

    <h1>Location</h1>

    <ul>

        @foreach($location as $loc)
            <li>
                <a href=" {{ route('location-show' , $loc -> id)}} "> {{$loc -> name}} </a>
            </li>
        @endforeach
    </ul>

    @endsection