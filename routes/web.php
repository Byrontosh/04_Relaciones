<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () 
{
    $users = User::all();
    //dd($users);
    return view('welcome',compact('users'));
})->name('home');



Route::get('profile/{id}',function($id)
{
    // dd($user);
    $user = User::find($id);

    // dd($user);
    $posts = $user->posts()
                  ->with('category','image','tags')
                  ->withCount('comments')->get();

    //dd($posts);
    $videos = $user->videos()
            ->with('category','image','tags')
            ->withCount('comments')->get();

    return view('profile',compact(['user','posts','videos']));

})->name('profile');