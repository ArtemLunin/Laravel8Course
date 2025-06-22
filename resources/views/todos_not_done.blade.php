@extends('layouts.app')
@section('content')
 <h1 class="display-4">Todos not done</h1>
 <a href="/todos/done">Выполнено</a>
 <a href="/todos/not-done">Не выполнено</a>
 <div class="jumbotron">
    <ul class="list-group mt-4">
        @foreach ($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $todo->title }}
                    <p>{{ $todo->note }}</p>
                </div>
                @if ($todo->status === 1)
                    <span class="badge badge-success badge-pill">Выполнено</span>
                @else
                    <span class="badge badge-danger badge-pill">Не выполнено</span>
                @endif            
            </li>
        @endforeach
    </ul>  
 </div>
@endsection