<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect('tasks');
});

Route::get('/tasks', function () {
  $tasks = Task::all();
  if (!$tasks) {
    abort(404);
  }
  return view('task.index', ['tasks' => $tasks]);
});

Route::get('/task-create', function () {
  return view('task.create');
});

Route::post('/task-create', function (Request $request) {
  $validated = $request->validate([
    'title'       => 'required|string|max:255',
    'description' => 'nullable|string|max:10000',
  ]);

  $task = Task::create([
    'title'       => $validated['title'],
    'description' => $validated['description'],
  ]);

  return redirect('/tasks')->with('status', 'Task created.');
});

Route::get('/task-edit/{id}', function ($id) {
  $task = Task::find($id);
  if (!$task) {
    abort(404);
  }
  return view('task.update', ['task' => $task]);
});

Route::post('/task-edit/{id}', function (Request $request, $id) {
  $task = Task::find($id);
  if (!$task) {
    abort(404);
  }

  $validated = $request->validate([
    'title'       => 'required|string|max:255',
    'description' => 'nullable|string|max:10000',
    'completed'   => 'nullable|in:0,1',
  ]);

  $completed = $request->boolean('completed');

  $task->update([
    'title'        => $validated['title'],
    'description'  => $validated['description'] ?? null,
    'completed'    => $completed,
    'completed_at' => $completed ? now() : null,
  ]);

  return redirect('/tasks')->with('status', 'Task updated.');
});

Route::get('/task/{id}/delete', function ($id) {
  $task = Task::find($id);
  if (!$task) {
    abort(404);
  }
  $task->delete();

  return redirect('/tasks')->with('status', 'Task deleted.');
});

Route::post('/task/{id}/toggle', function ($id) {
  $task = Task::find($id);
  if (!$task) {
    abort(404);
  }

  $task->completed = ! $task->completed;
  $task->completed_at = $task->completed ? now() : null;
  $task->save();

  return redirect('/tasks')->with('status', 'Task status updated.');
});