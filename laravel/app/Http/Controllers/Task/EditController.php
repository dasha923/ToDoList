<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use  App\Models\Task;

class EditController extends Controller
{
    public function __invoke($id)
    {
      $task = Task::findOrFail($id);
      return view('task.edit', compact('task'));
    }

        
   
    }
