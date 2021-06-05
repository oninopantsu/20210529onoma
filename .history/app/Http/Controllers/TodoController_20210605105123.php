<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todos;


class TodoController extends Controller
{
    public function index(Request $request)
    {
        $item = Todos::all();
        return view('index', ['items' => $item]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $content = new Todos;
        $form = $request->all();
        unset($form['_token_']);
        $content->timestamps = false;
        $content->fill($form)->save();

        $item = Todos::all();
        return view('index', ['items' => $item]);
    }
    public function update(Request $request)
    {
        $form = $request->all();
        $item = Todos::all();
        DB::table('todos')->where('id',$request->id)->update($form);
        return view('index', ['items' => $item]);
    }
    public function delete(Request $request)
    {
        $item = DB::table('todos')->where('id', $request->id)->first();
        DB::table('todos')->where('id',$request->id)->first();
        return view('index', ['items' => $item]);
    }

}
