@extends('layouts.app')
@section('content')
 <h1 class="display-4">Students</h1>
 <div class="jumbotron">
    <ul class="list-group mt-4">
        @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    {{ $student->first_name }} {{ $student->last_name }}, возраст {{ $student->age }}, курс {{ $student->course_number }}, специальность {{ $student->specialty }}
                </div>
      
            </li>
        @endforeach
    </ul>  
 </div>
@endsection