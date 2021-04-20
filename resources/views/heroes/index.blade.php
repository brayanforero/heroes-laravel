@extends('layouts.template')
@section('title', 'Heroes')
@section('content')
<div class="container">
  <main class="pt-5 pb-4">
    <h2>Seccion de los Heroes</h2>
    @include('heroes._heroesgrid')
  </main>
</div>
@endsection