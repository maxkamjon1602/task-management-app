<x-layout>
  <x-slot:heading>
    All jobs
  </x-slot:heading>

  <section class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-10">

    @if ($tasks->count())
      @foreach ($tasks as $task)
      <div class="block max-w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-5">
        {{-- <div>{{ $task->user->name }}</div> --}}

        <form method="POST" action="/tasks/{{ $task->id }}/toggle" class="mb-4">
          @csrf
          <label>
            <input type="checkbox" 
                   name="completed" 
                   value="1" 
                   onchange="this.form.submit()" 
                   {{ $task->completed ? 'checked' : '' }}>
            {{ $task->completed ? 'Completed' : 'Pending' }}
          </label>
        </form>
        
        <a href="/tasks/{{ $task->id }}">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $task['title'] }}</h5>
        </a>
        
        <p class="h-20 overflow-hidden font-normal text-gray-700 dark:text-gray-400">{{ $task['description'] }}</p>
        <br><hr>

        <div class="flex gap-x-2">
          <a href="/tasks/{{ $task->id }}/edit" class="text-green-500 hover:underline mr-2">Edit</a>

          <form method="POST" action="/tasks/{{ $task->id }}">
            @csrf
            @method('DELETE')
            <button class="text-red-500 hover:underline">Delete</button>
          </form>
        </div>

        @if ($task['completed_at'])
          <p>Completed: {{ $task['completed_at'] }}</p>          
        @endif
      </div>

      @endforeach
    @else
      <p>No tasks yet. <a href="/tasks/create">Create one</a>.</p>
    @endif
  </section>
  <div class="mt-4">{{ $tasks->render() }}</div>

</x-layout>