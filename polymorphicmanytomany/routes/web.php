<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Video;
use App\Tag;
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
    return view('welcome');
});

//Create

Route::get('/create', function(){
    $post = Post::create(['name'=>'My first Post']);
    $tag = Tag::findOrFail(1);
    $post->tags()->save($tag);
    $video = Video::create(['name'=>'video.mp4']);
    $tag = Tag::findOrFail(2);
    $video->tags()->save($tag);
});


//Read

Route::get('/read', function(){
    $post = Post::findOrFail(2);


    foreach ($post->tags as $tag){
        echo $tag->name;
    }

});

// Update

Route::get('/update', function(){
    $post = Post::findOrFail(2);


    foreach ($post->tags as $tag){
        return $tag->whereName('Coding')->update(['name'=>'New Tag']);
    }

});

// Delete
Route::get('/delete', function(){
    $post = Post::findOrFail(2);


    foreach ($post->tags as $tag){
        return $tag->whereName('Coding')->delete();
    }

});
