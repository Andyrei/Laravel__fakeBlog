@extends('layouts.app')

{{-- CREATE A POST --}}

@section('content')
    <h1 class="text-center text-slate-400 text-xl font-bold">CREATE A BLOG ARTICLE</h1>
    <form action="{{route('posts.store')}}" class="text-slate-400 form-control w-full max-w-xs" method="POST">
        @csrf
        <div class="my-5">
            <div class="my-2">
                <label for="title" class="label">Title</label>
                <input type="text" class="input bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50" name="title">
            </div>
            <div class="my-2">
                <label for="title">Content</label>
                <textarea class="form-control bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50" name="content" rows="5"></textarea>
            </div
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-success mx-3">Create article</button>
            <button type="reset" class="btn btn-danger mx-3">Reset</button>
        </div>
    </form>
@endsection
