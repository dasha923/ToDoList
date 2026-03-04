<?php

namespace App\Http\Controllers\Task;


use App\Http\Requests\Task\UpdateRequest;
use  App\Models\Task;

class UpdateController extends BaseController
{
    public function __invoke($id, UpdateRequest $request, Task $task)
    {
        $data = $request->validate(); 
        
        $this->service->update($task, $id, $data);
        
        return redirect()->route('task.show', $task->id);
    }

        
   
    }
