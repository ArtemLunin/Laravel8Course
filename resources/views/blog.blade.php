@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Articles</h1>
        <form class="mb-4" action="/article" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
            </div>
            <button type="submit" onclick="event.preventDefault(); addArticle()" class="btn btn-primary">Add article</button>
        </form>

        <script>
            function addArticle() {
                const title = document.querySelector('#title').value;
                const body = document.querySelector('#body').value;

                let formData = new FormData();
                formData.append('title', title);
                formData.append('body', body);

                fetch('/article', {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf"]').getAttribute('content')
                    }
                });

                // location.reload();
            }
        </script>
        <div class="list-group">
        @foreach ($articles as $article)
            <a href="/article/{{ $article->id }}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $article->title }}</h5>
                    <small>{{ $article->created_at->format('d.m.Y') }}</small>
                </div>
                <p>{{ $article->body }}</p>
            </a>
            <div class="d-flex">
                <a href="/article/{{ $article->id }}/update" class="btn btn-success mt-3 mb-3 mr-2" style="width:100px;">Update</a>
                <form action="/article/delete" method="post" class="mr-4">
                    @csrf
                    <input type="hidden" name="id" value="{{ $article->id }}">
                    <button class="btn btn-danger mt-3 mb-3" style="width:100px;">Delete</button>
                </form>
            </div>
        @endforeach
        </div> 
    </div>
@endsection