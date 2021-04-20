@extends('layouts.template')
@section('title', 'Heroes')
@section('content')
<div class="container">
  <main class="pt-5 pb-4">
    <div class="d-flex justify-content-around align-items-center mb-4">
        <h2 class="m-0">Seccion de los Heroes</h2>
        <a href="{{route('heroes.create')}}" class="btn btn-primary">Agrega un Heroe</a>
    </div>
    @include('heroes._heroesgrid')
  </main>
</div>
@endsection
