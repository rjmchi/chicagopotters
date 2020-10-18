<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\EventController;
use App\Mail\ContactMail;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [HomeController::class, 'categories']);
Route::get('/links', [HomeController::class, 'links']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/events', [HomeController::class, 'events']);
Route::get('/mail/{artist}', [HomeController::class, 'mail']);
Route::post('/mail', [HomeController::class, 'sendMail']);

Route::get('/album/{slug}', [HomeController::class, 'showAlbum']);
Route::get('/gallery/{artist}/{category}/{show?}',[HomeController::class, 'gallery']);
Route::get('/showpiece/{piece}',[HomeController::class, 'piece']);
Route::get('/order/{piece}',[HomeController::class, 'order']);
Route::post('/order',[HomeController::class, 'processOrder']);

Route::get('/admin', [AdminController::class, 'index']);

Auth::routes();

Route::resource('album', AlbumController::class);
Route::resource('album.photo', PhotoController::class);
Route::resource('category', CategoryController::class);
Route::resource('artist', ArtistController::class);
Route::resource('piece', PieceController::class);
Route::resource('event', EventController::class);
