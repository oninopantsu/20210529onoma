<?php

namespace App\Http\Controllers;
namespace App\Su;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select* from todos');
    }
}
