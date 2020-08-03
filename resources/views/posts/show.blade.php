@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2>{{$post->title}}</h2></div>
                    <div class="card-body">
                        <div class="card-img card-img__max" style="background-image: url({{ $post->img ?? asset('assets/img/default.jpg') }})"></div>
                        <div class="card-author">Автор: {{$post->name}}</div>
                        <div class="card-date">Пост создан: {{$post->created_at->diffForHumans()}}</div>
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                    </div>
            </div>
        </div>
    </div>
@endsection
