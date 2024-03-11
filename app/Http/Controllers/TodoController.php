<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){
        $title = "Todo";
        return view('welcome',['name'=>'Vvk','title'=>$title]);
    }
}
