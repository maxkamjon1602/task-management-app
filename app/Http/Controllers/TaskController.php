<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    //
    public function index()
    {
      $tasks = Task::with('user')->latest()->paginate(4);   //simplePaginate(), cursorPaginate(
      
      return view('tasks.index', [
        'tasks' => $tasks
      ]);
    }

    public function create()
    {
      return view('tasks.create');
    }

    public function show(Task $task)
    {
      return view('tasks.show', ['task' => $task]);
    }


    public function store()
    {
      request()->validate([
        'title'       => 'nullable|string|max:255',
        'description' => 'required|string|max:10000',
      ]);

      Task::create([
        'user_id'     => 4,
        'title'       => request('title'),
        'description' => request('description'),
      ]);

      return redirect("/tasks");
    }

    public function edit(Task $task)
    {
      return view('tasks.edit', ['task' => $task]);
    }

    public function update(Task $task)
    {
      request()->validate([
        'title'       => 'nullable|string|max:255',
        'description' => 'required|string|max:10000',
        'completed'   => 'nullable|in:0,1',
      ]);

      $completed = request()->has('completed');

      $task->update([
        'title'        => request('title'),
        'description'  => request('description' ?? null),
        'completed'    => $completed,
        'completed_at' => $completed ? now() : null,
      ]);

      return redirect('/tasks/' . $task->id);
    }

    public function destroy(Task $task)
    {
      $task->delete();
      return redirect('/tasks');
    }

    public function toggle(Task $task)
    {
      $task->completed = ! $task->completed;
      $task->completed_at = $task->completed ? now() : null;
      $task->save();

      return redirect()->back();

      // dd("works");
    }
}
