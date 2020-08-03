@extends('layouts.layout')

@section('content')
    <form action="{{ route('post.update', ['id' => $post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Редактировать пост</h3>
        @include('posts.parts.form')

        <input type="submit" value="Редактировать пост" class="btn btn-outline-success">
    </form>
@endsection
