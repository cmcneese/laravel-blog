<?php

//use  \Spatie\YamlFrontMatter;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
        ]);
});

//make a change

Route::get('posts/{post:slug}',function(Post $post) { // Post::where('slug', $post)->firstOrFail()
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function(\App\Models\Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
});
