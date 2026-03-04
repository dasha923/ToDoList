<?php
use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DestroyController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\ShowController;
use App\Http\Controllers\Task\StoreController;
use App\Http\Controllers\Task\UpdateController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Task'], function(){
    Route::get('/tasks', [IndexController::class, '__invoke'])->name('task.index');
    Route::get('/tasks/create', [CreateController::class, '__invoke'])->name('task.create');
    Route::post('/tasks', [StoreController::class, '__invoke'])->name('task.store');
    Route::get('/tasks/{id}', [ShowController::class, '__invoke'])->name('task.show');
    Route::get('/tasks/{id}/edit', [EditController::class, '__invoke'])->name('task.edit');
    Route::patch('/tasks/{id}', [UpdateController::class, '__invoke'])->name('task.update');
    Route::delete('/tasks/{id}/delete', [DestroyController::class, '__invoke'])->name('task.destroy');
});

Route::get('/', function(){
    return redirect()->route('task.index');
});