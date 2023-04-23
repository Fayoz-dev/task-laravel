<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function viewTable(){
        //$tasks = Tasks::all();
        $tasks = Task::select("id", "task", "deadline")->get();
        return view("tasks.table-export", ["data" =>$tasks],);
    }
    public function create(){
       return view('task.table-export');
    }
    
    public function createContent(Request $request){
        $task = new Task();
        $task->task=$request->task;
        $task->deadline=$request->deadline;
        $task->save();
        return $this->viewTable();
    }
}
