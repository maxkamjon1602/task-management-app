<x-layout>
  <form method="POST" action="/task-create" class="max-w-md mt-4 space-y-4">
    @csrf

    <div>
      <label class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" required class="mt-1 block w-full border rounded px-2 py-1" />
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700">Description</label>
      <textarea name="description" rows="4" maxlength="10000" class="mt-1 block w-full border rounded px-2 py-1">{{ old('description') }}</textarea>
    </div>

    <div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create new task</button>
    </div>
  </form>
</x-layout>