<?php



Route::prefix('/')->group(function(){
    Route::get('', 'IndiceApuntesController@index')->name('uno');
});