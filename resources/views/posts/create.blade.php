<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    {{-- CREATE A POST --}}
    <div class="w-5/12">
        <h1 class="text-center text-slate-400 text-xl font-bold">CREATE A BLOG ARTICLE</h1>
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="text-slate-400 w-full">
                <div class="my-5 form-control">
                    <div class="my-2">
                        <label for="title" class="label">Title</label>
                        <input
                            type="text"
                            name="title"
                            class="input-primary rounded-md w-full bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50">
                    </div>
                    <div class="my-2 form-control">
                        <label for="title">Content</label>
                        <textarea
                            name="content"
                            rows="5"
                            class="textarea-primary rounded-md bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50"
                            ></textarea>
                    </div>
                </div>
                <div class="btn-group justify-between w-full">
                    <button type="submit" class="btn btn-success mx-3">Create article</button>
                    <button type="reset" class="btn btn-danger mx-3">Reset</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
