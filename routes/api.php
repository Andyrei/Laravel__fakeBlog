<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
    ? CREATING A CUSTOM API
    - can be find on -> http://my-website.com/api/ciao
    - executing the api and outputing a json in this case only a string with CIAO
*/
Route::get("/ciao", function(){
    return "ciao";
});


/* POSTS API */

// GET ALL POSTS
Route::get('/posts', function() {
    return Post::all();
});

//GET ONLY ONE POST w/ find or findorfail to give a 404 page if there is none
Route::get('/posts/{id}', function($id){
    return Post::findorfail($id);
});

//post
Route::post('/post/create', function(Request $request){
    $post = new Post;
    $post -> titolo = $request -> input('title');
    $post -> titolo = $request -> input('content');
    $post -> save();

    return "POST SAVED";
});

//UPDATE
Route::patch('/post/{id}', function(Request $request, $id){
    $post = Post::findOrFail($id);
    $post -> titolo = $request -> input('title');
    $post -> titolo = $request -> input('content');
    $post -> user_id = 1;
    $post -> save();

    return "POST UPDATED";
});

//DELETE
Route::delete('posts/{id}', function ($id) {
    $id = Post::findOrFail($id);
    $id = save();

    return "POST DELETED";
});
