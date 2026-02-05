<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use  App\Models\Task;

class TaskController extends Controller{

        
    function index()
    {      
        
        $tasks = Task::all();   
        return view('task.index',compact('tasks'));

    }
    
    
    function create()
    {

        return view('task.create');


    }
        
    function store()
    {

        $data= request()->validate([
            'title' => 'string',  
            'description' => 'string',
            'status'  => 'boolean' 
        ]);
        Task::create($data);
        return redirect()->route('task.index');

    }


    function show($id)
    {
        
        $task = Task::findOrFail($id);
        return view('task.show', compact('task'));

    }


    function edit($id)
    {

        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));



    }

    function update($id)
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

    
    function destroy($id)
    {

    $task = Task::findOrFail($id);
    $task->delete();
    return redirect()->route('task.index', $task->id);
    }
    }
?>