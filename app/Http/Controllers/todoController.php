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
    public function delete($id){
        $todo=todo::find($id); 
        $todos=$todo->delete();
        return back();
    }
    public function edit($id){
        $todo=todo::find($id);
        return view('form2',['todo'=>$todo]);
          }
    public function update(Request $request){
          $todo=todo::find($request->id); 
        $todo->title=$request->title;
        $todo->desc=$request->desc;
        $todo->save();
        return Redirect('/view');
    }

}
