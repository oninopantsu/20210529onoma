<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todos;
use Database\Seeders\TodosTableSeeder;

class TodoController extends Controller
{
    public function index(Request $request)
    {
    $items = Todos::all();
    $items = Todos::orderBy('created_at')->get();
        return view('index', ['items' => $items]);
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $content = new Todos;
        $form = $request->all();
        unset($form['_token_']);
        $content->timestamps = false;
        $timestamp = time();
        echo date('Y-m-d- H:i:s', $timestamp);
        $content->fill($form)->save();

        $items = Todos::all();
        return view('index', ['items' => $items]);
    }

    public function update(Request $request)
    {
        $items = Todos::find($request->id);
        $this->validate($request, Todos::$rules);
        $content = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $content->fill($form)->save();
        return redirect('index');
    }
    public function delete(Request $request)
    {
        $todos = Todos::find($request->id);
        $content->delete();
        return view('index');

    }
}
