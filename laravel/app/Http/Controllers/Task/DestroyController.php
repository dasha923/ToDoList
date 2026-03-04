<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use  App\Models\Task;

class DestroyController extends Controller
{
    public function __invoke($id)
    {
         $task = Task::findOrFail($id);
         $task->delete();
         return redirect()->route('task.index', $task->id);
    }

        
   
    }
