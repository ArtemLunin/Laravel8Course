@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Panel') }}</div>

                <div class="card-body">
                    {{ __('Welcome to admin panel!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
