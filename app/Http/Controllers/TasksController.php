<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
        
    }
    public function store(){
        $task =  new Task();
        $task->task = request('task');
        $task->save();
        return redirect('/');
    }
    public function update(){
    }

    
    
}
