<?php

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware' => ['web']], function (){
    Route::group(['prefix' => 'account'], function (){ /* This is used to prefix all of our nested routes by the word account*/
        /*Route::get('/', function () {                 This is used to make things more structured
            echo 'welcome';
        });*/
        Route::get('/change-password', function () {
            echo 'change the password of the application';
        });
        Route::get('/profile', function () {
            echo 'change the profile of the actual user ';
        });
        Route::get('clients/landing', function () {
            echo 'get clients from the client route ';
        })->name('landing');
        Route::get('/clients', function () {
          return redirect()->route('landing');
        });
        Route::get('/', ['as' => 'home', 'user' => 'LoginControlle@index']
        /*Route using a controller action*/);
        
    });
});
