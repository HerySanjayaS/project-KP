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
      <div class="profile">
        <div>
          <p>TESTIMONIAL</p>
          <P style="color: black;">OUR CUSTOMER SAYS</P>
        </div>
      </div>
  
      <div class="foto">
        <img src="img/katerina.png" alt="">
        <p>Katerina Storia</p>
      </div>
      </main> 
    @endsection