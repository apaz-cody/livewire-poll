<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Livewire Poll</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    label {
      @apply block uppercase text-slate-700 mb-2
    }

    input, 
    textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }
  </style>
  {{-- blade-formatter-enable --}}

  @livewireStyles
</head>

<body >
  @livewireScripts

  @include('layouts.navigation')

  <!-- Page Heading -->
  @if (isset($header))
      <header class="bg-white shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              {{ $header }}
          </div>
      </header>
  @endif


<div class="container mx-auto mt-10 mb-10 max-w-lg">
  <div>
  <h2 class="mb-4 mt-4 text-2xl">Create Poll</h2>
  @livewire('create-poll')
  </div>
  
  <div>
  <h2 class="mb-4 mt-4 text-2xl">Available Polls</h2>
  @livewire('polls')
  </div>
</div>
</body>

</html>
