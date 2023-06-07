{{-- @extends('layouts.app')
@section('title')
    Contact
@endsection
@section('meta-description', 'about Contact')
@section('content')
<h1>Contact</h1>
@endsection --}}

{{-- @component('components.layout')
    <h1>Home</h1>
@endcomponent --}}

<x-layouts.app title="Contact" meta-description="Contact">
    {{-- si necesito estructuras HTML :--}}
    {{-- <x-slot name="title">Home titulo</x-slot> --}}

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Contact</h1>
</x-layouts.app>
