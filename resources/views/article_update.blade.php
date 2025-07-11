@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Update: {{ $article->title }}</h1>
        <form class="mb-4" action="/article/update" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $article->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{ $article->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Save changes</button>
        </form>
    </div>

@endsection