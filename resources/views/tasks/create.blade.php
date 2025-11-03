<x-layout>
  <x-slot:heading>
    Create Task
  </x-slot:heading>

  <form method="POST" action="/tasks" class="mt-4 space-y-4 w-full">
    @csrf

    <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Task</h2>
    <p class="text-sm leading-6 text-gray-600">Write your the list of things you want to complete.</p>

    <div>
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" id="title" class="block w-80 border rounded mt-1 px-2 py-1" placeholder="My note"/>

      @error('title')
        <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <label for="description" class="block mt-5 text-sm font-medium text-gray-700">Description</label>
      <textarea name="description" id="description" rows="4" maxlength="10000" class="mt-1 block w-full border rounded px-2 py-1" placeholder="Write your tasks" ></textarea>

      @error('description')
        <p class="text-xs text-red-500 font-semibold mt-1 ml-1">{{ $message }}</p>
      @enderror
    </div>

    <div>
      <button type="submit" class="bg-blue-500 text-white mt-5 px-4 py-2 rounded">Create new task</button>
    </div>
  </form>

</x-layout>