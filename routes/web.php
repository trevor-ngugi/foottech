<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TeamDetailController;
use App\Http\Controllers\SiteController;
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
Route::get('/team',[\App\Http\Controllers\EventController::class,'allteam']);
Route::get('/teamprofile',[\App\Http\Controllers\EventController::class,'profileteam'])->name('teamprofile');
Route::get('/team',[\App\Http\Controllers\ImageUploadController::class,'allteam'])->name('team');
Route::get('/teamprofile',[\App\Http\Controllers\ImageUploadController::class,'profileteam'])->name('teamprofile');

//team links with db
Route::get('/teamdb',[\App\Http\Controllers\TeamController::class,'index'])->name('team');//displaying alll teams in the system
Route::get('get-singleTeam/{id}', [\App\Http\Controllers\TeamController::class,'getTeam']);

//scout links
Route::get('/scout',[\App\Http\Controllers\ImageUploadController::class,'allscout'])->name('scout');

//messga link
Route::get('/message',[\App\Http\Controllers\EventController::class,'messagescout'])->name('message');

//scout trial route
Route::get('/scout2',[\App\Http\Controllers\EventController::class,'allscout']);

Route::get('/scout', [\App\Http\Controllers\ScoutController::class, 'index'])->name('scout');
Route::get('/scout/create/post', [\App\Http\Controllers\ScoutController::class, 'create'])->name('addScout'); //shows create post form
Route::post('/scout/create/post',[\App\Http\Controllers\ScoutController::class, 'store']); //saves the created post to the databse
Route::get('/scout/{scout}/edit',[\App\Http\Controllers\ScoutController::class, 'edit']);
Route::put('/scout/{scout}/edit',[\App\Http\Controllers\ScoutController::class, 'update']);
//Route::delete('/scout/{scout}',  [\App\Http\Controllers\ScoutController::class, 'destroy']);
Route::get('/scout/{scout}', [\App\Http\Controllers\ScoutController::class, 'show']);



Route::get('/scouttutorial/{scout}', [\App\Http\Controllers\ScoutController::class, 'show']);


Route::get('/scouttutorial/{scout}/edit',[\App\Http\Controllers\ScoutController::class, 'edit']); //shows edit post form
Route::put('/scouttutorial/{scout}/edit',[\App\Http\Controllers\ScoutController::class, 'update']); //commits edited post to the database 
Route::delete('/scouttutorial/{scout}',  [\App\Http\Controllers\ScoutController::class, 'destroy']); //deletes post from the database


//team links
Route::get('get-TM/{id}', [EventController::class, 'getTeamManager']);//get team mangers details
Route::get('get-team/{id}', [EventController::class, 'getTeam']);//get teams details

//team details
Route::get('get-teamdetail/{id}', [TeamDetailController::class, 'getTeamDetail']);//gets team details
Route::get('get-team2/{id}', [ TeamDetailController::class, 'getTeam']);//get teams details
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
