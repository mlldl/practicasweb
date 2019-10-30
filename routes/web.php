<?php



Route::prefix('/')->group(function(){
    Route::get('', 'IndiceApuntesController@index')->name('uno');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
