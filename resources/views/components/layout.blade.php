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
  <div class="max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="flex flex-1 items-center sm:items-stretch sm:justify-start">
      <div class="flex space-x-4">
        <a href="/" aria-current="page" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Home</a>
        <a href="/tasks" aria-current="page" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-white/5 hover:text-white">Tasks</a>
        <a href="/tasks/create" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Create task</a>
        </div>
    </div>
  </div>
</nav>


<header class="bg-white shadow">
  <div class="flex justify-between mx-auto-max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
    <x-button href="/tasks/create">Create Task</x-button>
  </div>
</header>


<main class="m-6">
  <div>
    {{ $slot }}
  </div>
</main>


</body>
</html>