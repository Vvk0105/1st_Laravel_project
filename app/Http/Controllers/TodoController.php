<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){
        $todos = Todo::all();
        //dd($todos);
        return view('home',['todos'=>$todos]);
    }

    public function store(Request $request){
        //dd($request);
        //dd($request->post('title'));
        $todo = new Todo();
        $todo->title = $request->post('title');
        $todo->save();
        //return redirect('/');
        return back();
    }
}
