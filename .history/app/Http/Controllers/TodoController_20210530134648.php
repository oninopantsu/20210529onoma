<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate
class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todos::all();
        return view('index',[$items => $items]);
    }
}
