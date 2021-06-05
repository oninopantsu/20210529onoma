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
        $items ->save();
        $items->timestamps->indexupdated_at = false;
        $form = [
            'id' => '$form->id',
            'created_at' => '$form->timestamps',
            'content' => '$form->content'
        ];
        $items = DB::table('todos')->orderBy('id', 'asc')->get();
        DB::table('todos')->insert($form);
        return view('index', ['items' => $items]);
    }


    public function update(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $items = Todos::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $items->fill($form)->save();
        DB::table('todos')->where('id', $request->id)->update($form);
        return redirect('index', ['items' => $items]);
    }    


    public function delete(Request $request)
    {
        $items = Todos::find($request->id)->delete();
        return redirect('index', ['items' => $items]);
    }
}
