<x-layouts.app :title="$post->title" :meta-description="$post->title">



    <h1 class="my-4 font-serif text-3xl text-center text-sky-600">{{ $post->title }}</h1>
    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 ">
        <p class="flex-1 leading-normal text-slate-600 ">{{ $post->body }}</p>
        <a class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded " href="{{ route('posts.index') }}">Return</a>
    </div>
</x-layouts.app>
{{-- :antes del nombre de la propiedad para usar php en el argumento ej :title --}}
