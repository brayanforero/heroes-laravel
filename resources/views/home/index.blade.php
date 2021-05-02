@extends('layouts.template')
@section('title', 'Home')

@section('content')
    <div class="hero">
      <div class="container d-flex flex-column align-items-center justify-content-center">
        <h2 class="display-3">Descubre todos los heroes</h2>
        <a class="btn btn-primary" href="{{route('heroes.index')}}">Explorar</a>
      </div>
    </div>
@endsection
