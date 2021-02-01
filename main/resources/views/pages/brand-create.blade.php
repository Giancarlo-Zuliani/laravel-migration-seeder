@extends('layouts.main-layouts');

@section('content')
 <h2>create</h2>
 <form action="{{route('store-brand')}}" method="POST">
    @csrf
    @method('POST')
    <label for="name">nome</label>
     <input name="name" id="name" type="text" placeholder="name"> 
     <br>
     <label for="logo">nome</label>
    
     <input name="logo" id="logo" type="text" placeholder="logo">
     <br>
     <label for="phonenumber">phone number</label>
     <input type="text" name="phone_number" id="">
     <label for="location">location</label>
     <input id="location" name="num_of_location" type="number" placeholder="location">
     <br>
     <input type="submit" value="submit" placeholder="submit">

     @endsection