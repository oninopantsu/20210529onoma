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
    public function add(Request $request)
    {
        $this->validate($request, Todos::$rules);
        $content = new Todos;
        $form = $request
        $items = Todos::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $items = Todos::all();
        return view('index', ['items' => $items]);
    }
}
