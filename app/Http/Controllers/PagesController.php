<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function todos() {

        // $todo = new Todo();
        // $todo->title = "Сделать гимнастику";
        // $todo->note = "Как обычно";
        // $todo->save();

        // $todo = $todo->save();
        // отладка переменной $todo - сейчас в ней результат добавления записи
        // dd($todo);

        //2-й способ добавления записи, чтобы работало, нужно описать поля в модели: protected $fillable
        // $todo = Todo::create([
        //     "title" => "Сделать гимнастику",
        //     "note"  => "Для суставов"
        // ]);

        // находим нужную строку и меняем данные
        $todo = Todo::find(1);
        // if ($todo) {
        //     $todo->status = 1;
        //     $todo->save();
        // }

        // удаление данных
        $todo = Todo::find(5);
        // $todo->delete();

        // получение всех полей
        $todos = Todo::all();

        return view('todos', [
            "todos" => $todos
        ]);
    }

    public function todosDone() {
        $todos = Todo::where('status', 1)->get();
        return view('todos_done', [
            "todos" => $todos
        ]);
    }

    public function todosNotDone() {
        $todos = Todo::where('status', 0)->get();
        return view('todos_not_done', [
            "todos" => $todos
        ]);
    }
}
