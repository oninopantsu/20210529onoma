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
    $content = $request->content;
    $data = [
        'id' => $request->id,
        'content' => $request->$content
    ];
        return view('index', ['items' => $items]);
    }
    public in
    
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

        $content = [
            'content' => 'request'
        ];
        return view('index', ['items' => $content]);
    }

    public function update(Request $request)
    {
        $items = Todos::find($request->id);
        $this->validate($request, Todos::$rules);
        $todos = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todos->fill($form)->save();
        return redirect('index');
    }
    public function delete(Request $request)
    {
        $items = Todos::find($request->id);
        return view('index', [$items => $items]);
    }
    public function remove(Request $request)
    {
        Todos::find($request->id)->delete();
        return redirect('/');
    }}
