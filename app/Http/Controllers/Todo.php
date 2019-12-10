<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TodoModel;

class Todo extends Controller
{
    //
function index($id="") {

    $todo = null;
    if($id != "") {
        $todo = TodoModel::find($id);
    }
    
    $tododata = TodoModel::all();

    return view('todo')->with(['todos' => $tododata, 'data' => $todo]);
}

public function manage(Request $request)
{
    if($request->id != 0) {
        $todo = TodoModel::find($request->id);
        $todo->todo = $request->todo;
        $todo->save();
    }else{
        $todo = new TodoModel();
        $todo->todo = $request->todo;
        $todo->save();
    }

    return redirect()->route('todo');
}

function delete($id) {
    $todo = TodoModel::find($id);

    $todo->delete();

    return redirect()->route('todo');
}
}
