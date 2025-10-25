<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task management application</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<nav class="relative bg-gray-800 p-2">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
      <div class="flex space-x-4">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
        <a href="/tasks" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Tasks</a>
        <a href="/task-create" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Create task</a>
        </div>
    </div>
  </div>
</nav>

  <main class="m-6">
    <div>
      {{ $slot }}
    </div>
  </main>
</body>
</html>