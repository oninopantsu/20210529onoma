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
        $items = new Todos;
        $form = $request->all();
        unset($form['_token_']);
        $items->fill($form)->save();
        $data = [
            'timestmps' => '$form->created_at',
            'content' => '$form->content'
        ];
        $content = $request->input;
        $request->form()->put('content', $content);
        return view('index', ['items' => $items]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $items = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $items->fill($form)->save();
        return redirect('/');
    }    
    public function delete(Request $request)
    {
        $items = Todos::find($request->id);
        return view('index', ['items' => $items]);
    }
}
