<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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
    return view('index');
});

// -----*Contact Mailing*----- //
Route::get('/contact',  [\App\Http\Controllers\ContactController::class, 'show']);

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'mail']);

Route::get('sitemap', function(){
SitemapGenerator::create('https://westcottdyson.com/')->writeToFile('sitemap.xml');

return 'sitemap created';
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/account', function (){
return view('account');
});


Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

