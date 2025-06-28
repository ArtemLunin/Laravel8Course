<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function blogPage() {
        $articles = Article::all();

        return view('blog', [
            "articles" => $articles
        ]);
    }

    public function articlePage($id) {
        $article = Article::find($id);
        if(!$article) {
            return abort(404);
        }

        // $comments = Comment::where('article_id', $id)->get();

        return view('article', [
            "article" => $article,
            "comments" => $article->comments
        ]);
    }
}
