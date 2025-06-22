@extends('layouts.layout')

@section('content')
 <ul class="list-group">
    @foreach ($descr as $descr_i)
      <li class="list-group-item">{{ $descr_i }}</li>
    @endforeach
 </ul>
@endsection