<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use  App\Models\Task;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validate();

        $this->service->store($data);
        
        return redirect()->route('task.index');
    }

        
   
    }
