<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SiteController;

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


// Route::resource('/event', EventController::class)->name('event');

Route::get('/event',[\App\Http\Controllers\EventController::class,'index'])->name('event');

Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'profile'])->name('profile');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//team links
Route::get('/team',[\App\Http\Controllers\EventController::class,'allteam'])->name('team');
Route::get('/teamprofile',[\App\Http\Controllers\EventController::class,'profileteam'])->name('teamprofile');

//scout links
Route::get('/scout',[\App\Http\Controllers\EventController::class,'allscout'])->name('scout');

//messga link
Route::get('/message',[\App\Http\Controllers\EventController::class,'messagescout'])->name('message');

//scout trial route
Route::get('/scouttutorial', [\App\Http\Controllers\ScoutController::class, 'index']);
Route::get('/scouttutorial/{scout}', [\App\Http\Controllers\ScoutController::class, 'show']);

Route::get('/scouttutorial/create/post', [\App\Http\Controllers\ScoutController::class, 'create']); //shows create post form
Route::post('/scouttutorial/create/post',[\App\Http\Controllers\ScoutController::class, 'store']); //saves the created post to the databse
Route::get('/scouttutorial/{scout}/edit',[\App\Http\Controllers\ScoutController::class, 'edit']); //shows edit post form
Route::put('/scouttutorial/{scout}/edit',[\App\Http\Controllers\ScoutController::class, 'update']); //commits edited post to the database 
Route::delete('/scouttutorial/{scout}',  [\App\Http\Controllers\ScoutController::class, 'destroy']); //deletes post from the database


//team links
Route::get('get-TM/{id}', [EventController::class, 'getTeamManager']);
Route::get('get-team/{id}', [EventController::class, 'getTeam']);
