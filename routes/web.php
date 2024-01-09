<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        // 'tasks' => \App\Models\Task::all(), // fetch all records
        'tasks' => \App\Models\Task::latest()->get(), // fetch records sorted
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
  return view('show', ['task' => \App\Models\Task::findOrFail($id) ]);
})->name('tasks.show');