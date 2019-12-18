<?php


Route::prefix('dashboard')->name('dashboard.')->group(function (){

    // url => (/dashboard/check)
    Route::get('/check',function(){

        dd('hello world');

    });

});// end of dashboard routes