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
public function post(Request $request)
{
    $content = $request->content;
    $data = [
        'id' => $request->id,
        'content' => $request->$content
        ];
    return view("index",$content);

    }
    
    public function create(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $content = new Todos;
        $form = $request->all();
        unset($form['_token_']);
        $items->timestamps = false;
        $timestamp = time();
        echo date('Y-m-d- H:i:s', $timestamp);
        $content->fill($form)->save();

        return view('index', ['items' => $items]);
    }

    public function update(Request $request)
    {
        $items = Todos::find($request->id);
        $this->validate($request, Todos::$rules);
        $items = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $items->fill($form)->save();
        return view('index', ['items' => $items]);
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
