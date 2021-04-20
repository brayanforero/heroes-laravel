@extends('layouts.template')
@section('content')
    <main class="pt-5 pb-4">
     <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6">
                <h2>Agrega tu heroe favorito</h2>
                <form action="{{route('heroes.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" autocomplete="off" placeholder="Write name Heroe" class="form-control p-4">
                    </div>
                    <div class="form-group">
                        <input type="text" name="company" autocomplete="off" placeholder="Company" class="form-control p-4">
                    </div>
                    <div class="form-group">
                        <input type="text" name="url" autocomplete="off" placeholder="Write slug url" class="form-control p-4">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add" class="btn btn-block btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
@endsection
