@extends('layouts.template')

@section('title' ,$hero->name)

@section('content')
    <h2>{{$hero->name}}</h2>
@endsection
