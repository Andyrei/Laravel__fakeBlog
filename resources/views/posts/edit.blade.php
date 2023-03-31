@extends('layouts.app')

{{-- MODIFY THE USER --}}

@section('content')
    <a href="{{route('posts.index')}}" ><</a>
    <h1 class="text-center text-white font-bold text-xl">EDIT BLOG ARTICLE</h1>
    <form action="{{route('posts.update', $post->id)}}" class="text-slate-400" method="POST">
        @csrf
        @method("patch")
        <div class="mb-2">
            <div class="my-3">
                <label for="title">Title</label>
                <input type="text" class="form-control bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50" name="title" value='{{$post->title}}'>
            </div>
            <div class="my-3">
                <label for="title">Content</label>
                <textarea class="form-control bg-inherit text-teal-100 focus:bg-slate-900 focus:text-teal-50" name="content">{{$post->content}}</textarea>
            </div>
        </div>
        <div class="btn-group w-100">
            <button type="submit" class="btn btn-success mx-5">Update</button>
            <button type="reset" class="btn btn-danger mx-5">Discard</button>
        </div>
    </form>
@endsection
