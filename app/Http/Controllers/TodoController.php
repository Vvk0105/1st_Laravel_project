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

    //edit function

public function edit(Todo $id){
    return view('update',compact('id'));
}
/*
public function edit($id){
    $todo = Todo::findOrFail($id);
    //if(!$todo){
      //  return abort(404);      we can use find or fail instead of this if statement
    //}
    //return view('update',compact('todo'));
    //['todo'=>$todo] == compact('todo') key=todo and value from $todo
    //dd($todo);
    }*/
    
    //update function
public function update(Request $request, Todo $id){
    $ValidatedData = $request->validate(['title'=>'required|max:124']);
    $id->update($ValidatedData);
    //$id->title = $ValidatedData['title']; instead of writing this we can use the code line->58 
    //$id->save();
    return redirect(route('home'));

}

}

