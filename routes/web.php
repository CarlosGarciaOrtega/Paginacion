<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\DiskController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\PaginateArtistController;

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
    return view('app.base');
});

Route::resource('movie', MovieController::class);
Route::resource('artist', ArtistController::class);
Route::resource('disk', DiskController::class);
Route::resource('paginate', PaginateArtistController::class);
Route::get('paginate2', [PaginateArtistController::class,'index2']);
Route::get('disk/view/file/fotosubida.jpg',[DiskController::class, 'view'])-> name('disk.view');

Route::get('setting',[SettingController::class, 'index'])-> name('setting.index');
Route::put('setting',[SettingController::class, 'update'])-> name('setting.update');
Route::put('setting',[SettingController::class, 'update'])-> name('setting.update');
Route::get('setting/showSelect',[SettingController::class, 'showSelect'])-> name('setting.showSelect');
Route::put('pais',[PaisController::class, 'index'])-> name('pais.index');
