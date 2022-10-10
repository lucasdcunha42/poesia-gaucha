<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PoesiaController;
use App\Http\Controllers\Admin\EditionController;

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

Route::redirect('/', '/admin/poesias');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('poesias', PoesiaController::class)->except(['show']);
    Route::resource('editions', EditionController::class);
});
/*
Route::get('/edicoes', function (){
    return view('edicoes.create');
});
*/
