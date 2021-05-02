@extends('layouts.template')

@section('title' ,$hero->name)

@section('content')
    <main class="pt-5 p-4">
        <div class="container">
            <div class=" justify-content-center">
                <div class="col-12 col-md-8">
                    <article class="card">
                        <img style="height: 320px; object-fit: cover;" src="{{$hero->poster}}" class="card-img-top" alt="poster">
                        <div class="card-body text-truncate">
                        <div class="card-body">
                            <h1>{{$hero->name}}</h1>
                            <p>Company: {{$hero->company}}</p>
                        </div>
                        <div class="card-footer">
                            <form action="{{route('heroes.destroy', $hero)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" href="#">Delete</button>
                            </form>
                            <a class="btn btn-success" href="{{route('heroes.edit', $hero)}}">Update</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
