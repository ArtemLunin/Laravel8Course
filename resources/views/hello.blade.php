@extends('layouts.app')

@section('content')
 <h1>Hello, {{ $name }}! </h1>
 <ul class="list-group">
    @foreach ($skills as $skill)
      <li class="list-group-item">{{ $skill }}</li>
    @endforeach
 </ul>
@endsection