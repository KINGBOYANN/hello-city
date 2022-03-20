<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function() {
    return view('pages/welcome');
})->name('home');

Route::name('about')->get('/about-us', function() {
    return view('pages/about');
});
*/


Route::view('/', 'pages.welcome')->name('home');

Route::view('/about-us', 'pages.about')->name('about');

?>
