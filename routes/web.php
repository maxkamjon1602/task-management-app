<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect('tasks');
});


// Swagger/OpenAPI
Route::get('/docs', function () {
  return view('docs');
});

// Index
Route::get('/tasks', function () {
  $tasks = Task::with('user')->latest()->paginate(4);   //simplePaginate(), cursorPaginate()

  if (!$tasks) {
    abort(404);
  }
  return view('tasks.index', ['tasks' => $tasks]);
});

// Create
Route::get('/tasks/create', function () {
  return view('tasks.create');
});

// Show
Route::get('/tasks/{id}', function ($id) {
  $task = Task::find($id);
  if (!$task) {
    abort(404);
  }
  return view('tasks.show', ['task' => $task]);
});

// Store
Route::post('/tasks', function (Request $request) {
  $validated = $request->validate([
    'title'       => 'nullable|string|max:255',
    'description' => 'required|string|max:10000',
  ]);

  $task = Task::create([
    'user_id'     => 4,
    'title'       => $validated['title'],
    'description' => $validated['description'],
  ]);

  return redirect("/tasks");
});

// Edit
Route::get('/tasks/{id}/edit', function ($id) {
  $task = Task::find($id);
  if (!$task) {
    abort(404);
  }
  return view('tasks.edit', ['task' => $task]);
});

// Update
Route::patch('/tasks/{id}', function ($id) {
  request()->validate([
    'title'       => 'nullable|string|max:255',
    'description' => 'required|string|max:10000',
    'completed'   => 'nullable|in:0,1',
  ]);

  $task = Task::findOrFail($id);
  $completed = request()->boolean('completed');

  $task->update([
    'title'        => request('title'),
    'description'  => request('description' ?? null),
    'completed'    => $completed,
    'completed_at' => $completed ? now() : null,
  ]);

  return redirect('/tasks/' . $task->id);
});

// Destroy
Route::delete('/tasks/{id}', function ($id) {
  $task = Task::findOrFail($id);
  $task->delete();

  return redirect('/tasks')->with('status', 'Task deleted.');
});

// Route::post('/task/{id}/toggle', function ($id) {
//   $task = Task::find($id);
//   if (!$task) {
//     abort(404);
//   }

//   $task->completed = ! $task->completed;
//   $task->completed_at = $task->completed ? now() : null;
//   $task->save();

//   return redirect('/tasks')->with('status', 'Task status updated.');
// });