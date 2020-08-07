@extends('layouts.layout', ['title' => '404 ошибка'])

@section('content')
    <div class="card">
        <h2 class="card-header">Не хочешь зайти в меня?</h2>
        <img src="{{ asset('assets/img/404.jpg') }}" alt="" style="width: 600px">
    </div>

    <a href="/" class="btn btn-outline-primary">Закончить тут</a>
@endsection
