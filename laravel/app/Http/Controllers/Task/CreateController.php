<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use  App\Models\Task;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('task.create');
    }

        
   
    }
