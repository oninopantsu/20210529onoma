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
        $items = DB::table('todos')->orderBy('id', 'asc')->get();
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
        return redirect('index', ['items' => $items]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $items = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $items->fill($form)->save();
        return redirect('index', ['items' => $items]);
    }    
    public function delete(Request $request)
    {
        $items = Todos::find($request->id);
        return redirect('index', ['items' => $items]);
    }
}
