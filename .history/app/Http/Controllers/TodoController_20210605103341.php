<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todos;


class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todos::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $content = new Todos;
        $form = $request->all();
        unset($form['_token_']);
        $content->timestamps = false;
        $content->fill($form)->save();

        $items = Todos::all();
        return view('index', ['items' => $items]);
    }
    public function update(Request $request)
    {
        $form
        $items = Todos::all();
        DB::table('todos')->where('id'->$request->id)->update($item);
        return view('index', ['items' => $items]);
    }
    public function delete(Request $request)
    {
        $items = Todos::all();
        return view('index', ['items' => $items])->delete();
    }
}
