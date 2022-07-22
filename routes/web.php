<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageUploadController;

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
Route::get('/fetch_video',[\App\Http\Controllers\VideoController::class,'fetch'])->name('allvideos');

Route::get('/index_u',[\App\Http\Controllers\VideoController::class,'index'])->name('postvideo');

Route::post('/insert_video',[\App\Http\Controllers\VideoController::class,'insert'])->name('insert.file');

Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'profile'])->name('profile');

Route::get('/Event', [App\Http\Controllers\EventController::class, 'index'])->name('Event');
Route::get('events/create', [App\Http\Controllers\EventController::class, 'create'])->name('create');
Route::post('store', [App\Http\Controllers\EventController::class, 'store'])->name('store');
Route::get('events/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('edit');
Route::get('events/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('show');
Route::put('events/{event}', [App\Http\Controllers\EventController::class, 'update'])->name('update');
Route::delete('events/{event}', [App\Http\Controllers\EventController::class, 'destroy'])->name('destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');
