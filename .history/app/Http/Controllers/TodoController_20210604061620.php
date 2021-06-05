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
        $todo = new Todos;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return view('index', ['items' => $item]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $todo = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }    public function delete(Request $request)
    {
        $items = Todos::find($request->content);
        return view('index', ['items' => $items]);
    }
    public function remove(Request $request)
    {
        Todos::all($request->content)->delete();
        return redirect('index');
    }
}
