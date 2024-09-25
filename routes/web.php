<?php

use Illuminate\Support\Facades\Route;

// Simple basic route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return view('dashboard');
});


// Parameter route to get value in balde file
 Route::get('/param/{id}', function (string $id){
 return "<h1> Id: " . $id . " </h1> ";
 });

Route::get('/param1/{id?}', function (string $id = null){
    if($id){
        return "<h1> Id: " . $id . " </h1> "; 
    }
    else{
        return "<h1> Id is not pass in url </h1>";
    }
});



// Named routes
Route::get('page/about-us', function () {
    return view('about');
})->name('aboutpage');


// Redirect url
// Route::redirect('page/about-us', '/test');


// This is child page route through layout balde
Route::get('/child', function (){
   return view('child');
});
