<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoController extends Controller
{
        public function form(){
        return view('form');
    }
    public function save(Request $request){
        $todo=new todo;
        $todo->title=$request->title;
        $todo->desc=$request->desc;
        $todo->save();
    }
    public function form1(){
        return view('view');
    }
    public function view(){
      $todo=new todo;
        $todos=$todo->all();
        return view('view',['todo'=>$todos]);
    }
}
