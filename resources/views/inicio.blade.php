{{-- @component('components.layout')
    <h1>Home</h1>
@endcomponent --}}

<x-layouts.app title="Home" meta-description="Home">
    {{-- si necesito estructuras HTML : --}}
    {{-- <x-slot name="title">Home titulo</x-slot> --}}

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>
    {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Button
      </button> --}}
</x-layouts.app>
