<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    // public function blogPage() {
    //     $articles = Article::all();

    //     return view('blog', [
    //         "articles" => $articles
    //     ]);
    // }

    // public function articlePage($id) {
    //     $article = Article::find($id);
    //     if(!$article) {
    //         return abort(404);
    //     }

    //     // $comments = Comment::where('article_id', $id)->get();

    //     return view('article', [
    //         "article" => $article,
    //         "comments" => $article->comments
    //     ]);
    // }


    // public function articleUpdatePage($id) {
    //     $article = Article::find($id);
    //     if (!$article) {
    //         return abort(404);
    //     }

    //     return view('article_update', [
    //         "article" => $article
    //     ]);
    // }

    public function test() {
        return view('test',[
            // "user" => Auth::user()
        ]);
    }
}
