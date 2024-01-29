<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TodoController extends Controller
{
    

    public function ListaaTodot (){
        

        $todo = DB::table('todo')->get();
      

        return view('todo.TodoAll',['todos' => $todo]);
    }
    
    public function UusiTodo (){
        return view('todo.TodoUusi');
    }

    public function UpdateTodo (Request $request, $id){


    }
    public function MuokkaaTodo ($todo){
        return view('todo.todoEdit', ['todo' => Todo::findOrFail($todo)]);

    }

    public function TallennaTodo(Request $request, $id){
        $todo = $request->validate(
        [
            'todo-nimi' => 'required',
            'todo-selite' => 'required',
            'todo-status' => 'required'
        ]

        );

        $data = Todo::findOrFail($id);
        
        
        $data = new Todo();

        $data->nimi = strip_tags($request->input('todo-nimi'));
        $data->selite = strip_tags($request->input('todo-selite'));
        $data->status = strip_tags($request->input('todo-status'));

        $data->save();


        return redirect(route('ListaaTodot'));
    }
}
