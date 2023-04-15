<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Posts') }}
        </h2>
    </x-slot>


{{-- ALL POSTS --}}
    @if (!$posts->isEmpty())
        <div class="max-w-80-md mx-auto">
            <table class="table w-full text-slate-200">
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
                            <th class="mr-5" style="color: #fdfdfd" scope="row">
                                {{ $post->id }}
                            </th>
                            <td style="color: #fdfdfd">
                                {{ $post->title }}
                            </td>
                            <td style="color: #fdfdfd; border-left: 1px solid #fff">
                                {{ $post->content }}
                            </td>
                            <td style="border-left: 1px solid #fff; border-right: 1px solid #fff">
                                <a href="/dashboard" class="btn btn-link btn-dark" style="color: #fdfdfd">
                                    {{ $post->user->name }}
                                </a>
                            </td>
                            <td>
                                <div class="btn-group h-100">
                                    <a href='{{ route('posts.edit', $post->id)}}' class="btn btn-warning d-block">Modify</a>
                                    <form class="mx-3 my-0" action={{ route('posts.destroy', $post->id)}} method="POST">
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
        </div>
    @else
        <div class="self-center text-center text-white">
            <p>There is no article yet!</p>
            <p>But hey,<a class="link ml-1 transition-all hover:underline-offset-4 hover:text-sky-700" href="{{route('posts.create')}}">add one right now!</a></p>
        </div>
    @endif
</x-app-layout>
