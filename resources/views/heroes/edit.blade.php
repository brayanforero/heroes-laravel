@extends('layouts.template')

@section('title' ,$hero->name)

@section('content')
    <main class="pt-5 p-4">
        <div class="container">
            <div class=" justify-content-center">
                <div class="col-12 col-md-8">
                    <article class="card">
                        <img style="height: 320px; object-fit: cover;" src="https://bitsofco.de/content/images/2018/12/Screenshot-2018-12-16-at-21.06.29.png" class="card-img-top" alt="poster">
                        <div class="card-body text-truncate">
                        <div class="card-body">
                            <form action="{{route('heroes.update', $hero)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input class="form-control mb-3" type="text" name="name" value=" {{old('name', $hero->name)}} ">
                                <input class="form-control mb-3" type="text" name="company" value=" {{old('company', $hero->company)}} ">
                                <button type="submit" class="btn btn-success" href="#">Update</button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
