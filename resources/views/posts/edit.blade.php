<x-layouts.app :title="$post->title" :meta-description="$post->title">

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 ">Edit form</h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow" action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')

        @include('posts.forms')

        <div class="flex items-center justify-between mt-4">
            <a class="text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('posts.index') }}">Regresar</a>

            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md  bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Enviar</button>
        </div>
    </form>
</x-layouts.app>
