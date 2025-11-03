<x-layout>
  <x-slot:heading>
      Edit Task
  </x-slot:heading>

  <form method="POST" action="/tasks/{{ $task->id }}" class="mt-4 space-y-4 w-full">
    @csrf
    @method('PATCH')

    <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Your Task</h2>
    <p class="text-sm leading-6 text-gray-600">Change or update the list of things you want to complete.</p>

    <div>
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" id="title" required value={{ $task->title }} class="block w-80 border rounded mt-1 px-2 py-1" />

      @error('title')
        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
      <textarea name="description" id="description" rows="4" maxlength="10000" class="mt-1 block w-full border rounded px-2 py-1">{{ $task->description }}</textarea>

      @error('description')
        <p class="text-xs text-red-500 font-semibold mt-1 ml-1">{{ $message }}</p>
      @enderror
    </div>

    <label>
      <input type="hidden" name="completed" value="0">
      <input 
        type="checkbox"
        name="completed"
        value="1"
        {{ $task->completed ? 'checked' : '' }}>
        {{ $task->completed ? 'Completed' : 'Pending' }}
    </label>
    
    <div>
      <a href="/tasks/{{ $task->id }}" class="text-sm font-semibold leading-6 text-gray-900 rounded px-4 py-2 mr-4 hover:bg-gray-100">Cancel</a>
      <button type="submit" name="completed" class="bg-blue-500 text-white px-4 py-2 rounded">Update task</button>
    </div>
  </form>
</x-layout>
