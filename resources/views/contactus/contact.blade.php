@extends('master')
    @section('title')
        <title>Contact Us</title>
    @endsection
    @section('konten')     
    <main>
        @include('contactus.partial.getintouch')
        @include('home.partial.subscribe')
      </main> 
    @endsection