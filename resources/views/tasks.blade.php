<x-layout>
  <h1 class="text-3xl m-4">All tasks</h1>

  <section>

    @if ($tasks->count())
      @foreach ($tasks as $task)

      <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 my-4">
        <form action="/task/{{ $task['id'] }}/toggle" method="POST" class="mb-4">
          @csrf
          <label>
            <input type="checkbox" name="completed" value="1" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
            {{ $task->completed ? 'Completed' : 'Pending' }}
          </label>
        </form>
        <a href="/task/{{ $task['id'] }}">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $task['title'] }}</h5>
        </a>
        
        <p class="font-normal text-gray-700 dark:text-gray-400">{{ $task['description'] }}</p>
        <br>
        <hr>
        <a href="/task-edit/{{ $task['id'] }}" class="text-green-500 hover:underline mr-2">Edit</a>
        <a href="/task/{{ $task['id'] }}/delete" class="text-red-500 hover:underline">Delete</a>

        @if ($task['completed_at'])
          <p>Completed: {{ $task['completed_at'] }}</p>          
        @endif
      </div>

      @endforeach      
    @else
      <p>No tasks yet. <a href="/task/create">Create one</a>.</p>
    @endif

  </section>
</x-layout>