<?php

namespace App\Http\Controllers;


use App\Support\Facades\DB;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select* from todos');
    }
}
