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
        $items = Todos::all();
        return view('index', ['items' => $items]);
         $param = [
            'id' => $request->name,
            'age' => $request->age
         ];
        DB::table('todos')->where('content', $request->content)->update($param);
        }
    public function delete(Request $request)
    {
        $items = Todos::all();
        return view('index', ['items' => $items]);
    }
}
