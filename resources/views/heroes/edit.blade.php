@extends('layouts.template')

@section('title' ,$hero->name)

@section('content')
    <main class="pt-5 p-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <article class="card">
                        <img style="height: 320px; object-fit: cover;" src="{{$hero->poster}}" class="card-img-top" alt="poster">
                        <div class="card-body text-truncate">
                        <div class="card-body">
                            @include('partials.errors')
                            <form action="{{route('heroes.update', $hero)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input class="form-control mb-3" type="text" name="name" value=" {{old('name', $hero->name)}} ">
                                <input class="form-control mb-3" type="text" name="comics" value=" {{old('comics', $hero->comics)}} ">
                                <input class="form-control mb-3" type="text" name="poster" value=" {{old('poster', $hero->poster)}} ">
                                <button type="submit" class="btn btn-success" href="#">Update</button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
