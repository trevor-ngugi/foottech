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



Auth::routes();

Route::get('/home', [App\Http\Controllers\videoController::class, 'fetch'])->name('home');
//team links
Route::get('/team',[\App\Http\Controllers\ImageUploadController::class,'allteam'])->name('team');
Route::get('/teamprofile',[\App\Http\Controllers\ImageUploadController::class,'profileteam'])->name('teamprofile');

//scout links
Route::get('/scout',[\App\Http\Controllers\ImageUploadController::class,'allscout'])->name('scout');

//messga link
Route::get('/message',[\App\Http\Controllers\ImageUploadController::class,'messagescout'])->name('message');


//For adding an event
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an event
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing events
Route::get('/events',[ImageUploadController::class,'viewImage'])->name('images.view');

//For editing an event
Route::get('events/{imageData}/edit', [App\Http\Controllers\ImageUploadController::class, 'edit'])->name('edit');

//For showing an event
Route::get('events/{imageData}/show', [App\Http\Controllers\ImageUploadController::class, 'show'])->name('show');

Route::put('events/{imageData}', [App\Http\Controllers\ImageUploadController::class, 'update']);
Route::delete('events/{imageData}', [App\Http\Controllers\ImageUploadController::class, 'destroy']);