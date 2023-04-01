<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
            <a href="{{route('posts.index')}}" class="kbd"> <- Back </a>
    </h2>
    </x-slot>
{{-- MODIFY THE USER --}}
<div class="w-5/12">
    <h1 class="text-center text-slate-400 text-xl font-bold">EDIT BLOG ARTICLE</h1>
    <form action="{{route('posts.update', $post->id)}}" class="text-slate-400" method="POST">
        @csrf
        @method("patch")
        <div class="text-slate-400 w-full">
            <div class="mb-2 form-control">
                <div class="my-3">
                    <label for="title" class="label">Title</label>
                    <input
                        type="text"
                        name="title"
                        value='{{$post->title}}'
                        class="input-primary rounded-md w-full bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50"
                    >
                </div>
                <div class="my-3 form-control">
                    <label for="title" class="label">Content</label>
                    <textarea
                        class="textarea-primary rounded-md bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50"
                        name="content"
                        rows="5"
                    >{{$post->content}}</textarea>
                </div>
            </div>
            <div class="btn-group justify-between w-full">
                <button type="submit" class="btn btn-success mx-5">Update</button>
                <button type="reset" class="btn btn-danger mx-5">Discard</button>
            </div>
        </div>
    </form>
</div>
</x-app-layout>
