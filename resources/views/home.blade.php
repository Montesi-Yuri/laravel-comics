@extends('layouts.std-html')

@section('page/tab title')
    Home
@endsection

@section('main-content')
    <section class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </section>
    <section>
        
    </section>
@endsection


{{-- <style scoped lang="scss">
    .jumbotron{
        height: 500px;
    }
    img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top;
    }

</style> --}}