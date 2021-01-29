@extends('layouts.main-layouts')

@section('content')
    <h1>Brands</h1>
    <ul>
        @foreach($brands as $brand)
                <li>
                   <a href="{{ route('brand-show' , $brand -> id) }}"> {{ $brand -> name}} </a>
                </li>
        @endforeach
    </ul>

 @endsection