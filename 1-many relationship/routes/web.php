<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;
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

// Inserting in database

Route::get('/insert', function(){

    $user = User::findOrFail(1);

    $post = new Post(['title'=>'New Title Post', 'body' => 'I love laravel']);

    $user->posts()->save($post);
});

// read from database
Route::get('/read', function(){
    $user = User::findOrFail(1);
// You have to use foreach if its not a one-one relationship
    foreach ($user->posts as $post){
        echo $post->title."<br/>";
    }

});

// Update database
Route::get('/update', function(){
    $user = User::findOrFail(1);

    $user->posts()->whereUserId(1)->update(['title'=>'LOving Laravel', 'body'=> 'Laravel is my babay']);
});

// Deleing from database

Route::get('/delete', function(){
    $user = USer::findOrFail(1);
    // since the soft delete isnt installed, the delete method
    // deletes the item permanently, else we use the forcedelete() methos
    $user->posts()->whereId(4)->delete();
});
