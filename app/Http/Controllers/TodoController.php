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
    
    /*public function store(Request $request){
    //dd($request);
    //dd($request->post('title'));
    $todo = new Todo();
    $todo->title = $request->post('title');
    $todo->save();
    //return redirect('/');
    return back();
    }*/

    //magic method
    public function store(Request $request){
        //dd($request);
        //dd($request->post('title'));

        $ValidatedData = $request->validate([
            'title'=>'required|max:124'
        ]);
        
        Todo::create($ValidatedData); //mass assigment automatically assign data / store data to database

        //$todo = new Todo;
        //$todo->title = $request->title;
        //$todo->save();
        //return redirect('/');
        
        return back();
    }
}

