<x-layouts.app title="Blog" meta-description="Blog">
    {{-- si necesito estructuras HTML : --}}
    {{-- <x-slot name="title">Home titulo</x-slot> --}}
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="my-4 font-serif text-3xl text-center text-sky-600">Blog</h1>
        @auth
            <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md  bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky"
                href="{{ route('posts.create') }}">Create new post</a>
        @endauth
    </header>

    {{-- @dump($posts) --}}
    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
        @foreach ($posts as $post)
            <div style="margin-left: 5%" class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow ">
                <h3 class="text-xl text-slate-600">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </h3>
                @auth
                    <div class="flex justify-around"> <a
                            class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out  text-slate-500 hover:text-slate-600"
                            href="{{ route('posts.edit', $post) }}">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out"
                                type="submit">Delete</button>

                        </form>
                    </div>
                @endauth
            </div>
        @endforeach
    </main>
</x-layouts.app>
