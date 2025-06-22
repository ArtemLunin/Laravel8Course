<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function helloPage() {
        return view('hello', [
        "name" => "Artem",
        "skills" => ["HTML5", "CSS3", "JS", "PHP"]
    ]);
    }

    public function testPage() {
        return view('test');
    }
}
