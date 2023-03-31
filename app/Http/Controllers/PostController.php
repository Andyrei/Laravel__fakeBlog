<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /* SHOW the list of all the posts from the table posts */
    public function index(){
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*','users.name as author')
        ->get();
        return view('posts.index', ['posts' => $posts]);
    }

    /* SHOW the view of the form */
    public function create(){
        return view('posts.create');
    }

    /* MODIFY CONTENT */
    public function edit($id){
        $post = DB::table('posts')->find($id);
        return view('posts.edit', ['post'=> $post]);
    }

    public function update(Request $request, $id){
        $update_post = DB::table('posts')
            ->where('id', $id)
            ->update([
                'title' => $request -> title,
                'content'=> $request -> content,
                'updated_at' => new \DateTime(),
            ]);
        return redirect() -> route('posts.index');
    }

    /* POST the data from the form into the DB in the table 'POSTS' and returns a list of posts */
    public function store(Request $request){
        DB::table('posts') -> insert([
            'title' => $request -> title,
            'content'=> $request -> content,
            'user_id' => Auth::id(),
            'created_at' => new \DateTime()
        ]);

        return redirect() -> route('posts.index');
    }

    /* DELETE method  */
    public function delete($id){
        $delete_post = DB::table('posts')
            -> where('id', '=', $id)
            -> delete();
        return redirect() -> route('posts.index');
    }
}
