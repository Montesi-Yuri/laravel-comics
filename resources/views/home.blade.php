@extends('layouts.app')

@section('page/tab title')
    Home
@endsection

@section('main-content')
    <section class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </section>
    <section class="comics-wrapper position-relative">
        <div class="container">
            <div class="comics-sec-title">
                <h2 class="bg-primary p-3">
                    COMICS
                </h2>
            </div>
            <div class="row">
                @foreach ($comics as $comic)
                        <div class="card m-3 comic col-2">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                                <p class="card-text">{{ $comic['type'] }}</p>
                                <p class="card-text">{{ $comic['price'] }}</p>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection