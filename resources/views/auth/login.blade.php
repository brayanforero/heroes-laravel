@extends('layouts.template')
@section('title', 'Login')
@section('content')
    <main class="container pt-5 pb-4">
        <article class="card w-75 mx-auto">
            <div class="card-body pt-5">
                <h1 class="text-center mb-5">Inicia Sesion</h1>
                @include('partials.errors')
                <form action="{{route('auth.loggedIn')}}" method="POST">
                    @csrf
                    <input required name="email" type="email" autocomplete="off" autofocus value="{{old('email')}}" placeholder="username" class="form-control mb-4">
                    <input required name="password" type="password" placeholder="password" class="form-control mb-4">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </article>
    </main>
@endsection
