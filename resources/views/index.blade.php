
<div class="w-fit mx-auto"><a href="/login" class="text-center btn">Area Riservata</a></div>
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('HomePage') }}
        </h2>
    </x-slot>

    <h1 class="text-3xl text-center text-white underline">POSTS</h1>
    <div class="grid space-y-10 justify-center text-white">
        @foreach ($posts as $post)
            <div class="my-10 bg-slate-900">
                <h1 class="text-center underline mb-4 text-xl">{{ $post -> title }}</h1>
                <p class="text-gray-500">{{ $post -> content }}</p>
                <p class="bg-slate-700">&odot; {{$post -> user -> name}} - created {{ \Carbon\Carbon::parse($post -> created_at)->format('d/M/yy') }}</p>
            </div>
        @endforeach
    </div>

</x-guest-layout>
