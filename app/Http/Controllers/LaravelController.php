<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function laravelPage() {
        return view('laravel', [
        "descr" => ["Laravel Jetstream", "Models Directory", "Model Factory Classes"]]);
    }
}
