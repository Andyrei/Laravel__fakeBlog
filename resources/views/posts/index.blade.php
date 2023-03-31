@extends('layouts.app')

{{-- ALL POSTS --}}
@section('content')
    <table class="table table-striped text-slate-200">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Content</th>
                <th scope="col">Author</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody style="color: #fdfdfd">
            @foreach ($posts as $post)
                <tr style="color: #fdfdfd">
                    <th style="color: #fdfdfd" scope="row">{{ $post->id }}</th>
                    <td style="color: #fdfdfd">{{ $post->title }}</td>
                    <td style="color: #fdfdfd; border-left: 1px solid #fff">{{ $post->content }}</td>
                    <td style="border-left: 1px solid #fff; border-right: 1px solid #fff">
                        <a href="/dashboard" class="btn btn-link btn-dark" style="color: #fdfdfd">{{ $post->author }}</a>
                    </td>
                    <td>
                        <div class="btn-group h-100">
                            <a href='{{ route('posts.edit', $post->id)}}' class="btn btn-warning d-block">Modify</a>
                            <form class="mx-3 my-0" action={{ route('posts.delete', $post->id)}} method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger d-block">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
