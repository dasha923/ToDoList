<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use  App\Models\Task;

class TaskController extends Controller{

        
    public function index()
    {      
        
        $tasks = Task::all();   
        return view('task.index',compact('tasks'));

    }
    
    
    public function create()
    {

        return view('task.create');


    }
        
    public function store()
    {

        $data= request()->validate([
            'title' => 'string',  
            'description' => 'string',
            'status'  => 'boolean' 
        ]);
        Task::create($data);
        return redirect()->route('task.index');

    }


    public function show($id)
    {
        
        $task = Task::findOrFail($id);
        return view('task.show', compact('task'));

    }


    public function edit($id)
    {

        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));



    }

    public function update($id)
    {

        $data = request()->validate([
            'title' => 'string',  
            'description' => 'string',
            'status'  => 'boolean' 
        ]); 

        $task = Task::findOrFail($id);
        $task->update($data);
        return redirect()->route('task.show', $task->id);
    }

    
    public function destroy($id)
    {

    $task = Task::findOrFail($id);
    $task->delete();
    return redirect()->route('task.index', $task->id);
    }
    }
?>