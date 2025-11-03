<x-layout>
    <x-slot:heading>
        Task
    </x-slot:heading>

  <section class="block w-full">

    @if ($task)
      <div class="block max-w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-5">
        {{-- <div>{{ $task->user->name }}</div> --}}

        <form action="/tasks/{{ $task->id }}/toggle" method="POST" class="mb-4">
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

        <a href="/tasks/{{ $task->title }}">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $task['title'] }}</h5>
        </a>

        <p class="h-auto font-normal text-gray-700 dark:text-gray-400">{{ $task['description'] }}</p>
        <br><hr><br>

        <div class="flex gap-x-4">
          <div>
            <x-button href="/tasks/{{ $task->id }}/edit">Edit Task</x-button>
          </div>

          <div class="flex items-center">
            <form method="POST" action="/tasks/{{ $task->id }}" class="py-2 px-2">
              @csrf
              @method('DELETE')

              <button class="text-red-500 hover:underline">Delete</button>
            </form>
          </div>
        </div>

        @if ($task->completed_at)
          <p>Completed: {{ $task->completed_at }}</p>
        @endif
      </div>

    @else
      <p>Create another task <a href="/tasks/create">Create one</a>.</p>
    @endif
  </section>

</x-layout>
