@extends('master')
    @section('title')
        <title>Home</title>
    @endsection
    @section('konten')     
    <main> 
        @include('home.partial.mainproduct')

        @include('home.partial.medsos')

        @include('home.partial.service')

        @include('home.partial.catalog')

        @include('home.partial.discount')

        @include('home.partial.data-product')

        @include('home.partial.bestseller')

        @include('home.partial.subscribe')

        @include('home.partial.customer')
      

      </main> 
    @endsection