{{-- @extends('layouts.app') --}}

{{-- @section('title', 'Home') --}}

{{-- @section('meta-description', 'Home meta description') --}}

{{-- @section('content') --}}
{{-- @component('components.layout') --}}
    
{{-- @endcomponent --}}
<x-layouts.app title="Home" meta-description="Home meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>
    @auth
        <div class="text-white">Authenticated User Name: {{ Auth::user()->name }}</div>
        <div class="text-white">Authenticated User Email: {{ Auth::user()->email }}</div>
    @endauth
</x-layouts.app>
{{-- @endsection --}}