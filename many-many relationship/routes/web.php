<?php

use Illuminate\Support\Facades\Route;
use App\Role;
use App\User;
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

// Insert

Route::get('/create', function() {

    $user = User::findOrFail(1);

    $role = new Role(['name'=>'Subscriber']);

    $user->roles()->save($role);
});

//Reading

Route::get('/read', function(){
    $user = User::findOrFail(1);


    // dd($user->roles);
    foreach ($user->roles as $role){
        return $role->name;
    }
});

// Update

Route::get('/update', function(){
    $user = User::findOrFail(1);

    if ($user->has('roles')){
        foreach ($user->roles as $role){
            if ($role->name == 'Subscriber'){
                $role->name = 'Editor';

                $role->save();
            }
        }
    }
});

// Delete

Route::get('/delete', function(){
    $user = User::findOrFail(1);

    foreach ($user->roles as $role){

        $role->whereId(3)->delete();
    }

});

//Attaching, detaching and syncing

// Attaching Role

Route::get('/attach', function(){
    $user  = User::findOrFail(1);
    $user->roles()->attach(2);
    // this attaches role number 2 to user 1
});

// Detaching Role

Route::get('/detach', function(){
    $user  = User::findOrFail(1);
    $user->roles()->detach(2);
    // this detaches role number 2 to user 1
});

// Sync

Route::get('/sync', function(){
    $user = User::findOrFail(1);

    $user->roles()->sync([6,2]);
    // This syncs what the detach method has removed
});
