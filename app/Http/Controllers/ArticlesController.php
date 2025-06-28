<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function store(Request $request) {
       $data = $request->only(['title', 'body']);
    //    $data = $request->all();

        //создаем новую запись
        $article = Article::create([
            "title" => $data["title"],
            "body"  => $data["body"]
        ]);

        // возвращаемся назад
        if($article) {
            return redirect()->back();
        }

    }

    public function destroy(Request $request) {
        $article = Article::find($request->id);

        if (!$article) {
            return abort(404);
        }

        $article->delete();

        return redirect()->back();
    }

    public function update(Request $request) {
        $data = $request->only(['title', 'body', 'id']);

        $article = Article::find($data['id']);

        if (!$article) {
            return abort(404);
        }

        $article->title = $data['title'];
        $article->body = $data['body'];
        $article->save();

        // возвращаемся в начало
        if($article) {
            // return redirect()->to('/');
            return redirect()->route('blog');
        }
    }

}
