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
        $this->validate($request, Todos::$rules);
        $content = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $content->fill($form)->save([
            'id','content','updated_at']);
        $items = Todos::all();
        return view('index', ['items' => $items]);
    }
    public function delete(Request $request)
    {
        $content = Todos::find($request->id);
        return view('delete', ['form' => $content]);
    }
    public function remove(Request $request)
    {
        Todos::find($request->id)->delete();
        return redirect('/');
    }
}
