<x-layouts.app title="Login" meta-description="Login">
    {{-- si necesito estructuras HTML : --}}
    {{-- <x-slot name="title">Home titulo</x-slot> --}}

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Login</h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow " action="{{ route('login') }}" method="POST">
        @csrf

        <div class="space-y-4">
            <label class="flex flex-col">
                <span class="font-serif text-slate-600  ">Email</span>
                <input
                    class="rounded-md shadow-sm border-slate-300  text-slate-600  focus:ring focus:ring-slate-300  focus:ring-opacity-50  focus:border-slate-300 "
                    name="email" type="email" value="{{ old('email') }}">
                @error('email')
                    <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror
            </label>
            <label class="flex flex-col">
                <span class="font-serif text-slate-600">
                    Password
                </span>
                <input class="rounded-md shadow-sm border-slate-300 text-slate-600  focus:ring focus:ring-slate-300  focus:ring-opacity-50  focus:border-slate-300  "
                       name="password"
                       type="password"
                >
                @error('password')
                <small class="font-bold text-red-500/80">{{ $message }}</small>
                @enderror
            </label>
            <label class="flex items-center">
                <input class="border rounded  border-slate-300 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300  focus:ring-opacity-50"
                       name="remember"
                       type="checkbox"
                >
                <span class="cursor-pointer ml-2 font-serif text-slate-600 ">
                    Remember me
                </span>
            </label>


        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none"
                href="{{ route('register') }}">Register</a>

            <button
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-2 border-transparent rounded-md bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500"
                type="submit">Login</button>
        </div>
    </form>
</x-layouts.app>
