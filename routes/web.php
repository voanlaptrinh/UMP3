<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class Route2
{
  static function rewrite($lang_input)
  {

    $lang_data  = file_get_contents(public_path('/data/home.txt'));
    $lang_data = json_decode($lang_data, true);

    if (isset($lang_data[$lang_input])) return $lang_data[$lang_input];

    return 'en';
  }
}
Route::group(['middleware' => 'locale'], function () {
    Route::post('/search', [SearchController::class, 'search'])->name('search');
    Route::post('/searchtitle', [SearchController::class, 'searchTitle'])->name('searchTitle');
    Route::post('/searchConvert', [SearchController::class, 'searchConvert'])->name('searchConvert');
    Route::post('/searchcheckTask', [SearchController::class, 'searchCheckTask'])->name('searchcheckTask');
    Route::get('/contactUs/{language?}', [FooterController::class, 'contactUs'])->name('contactUs');
    Route::get('/termService/{language?}', [FooterController::class, 'termService'])->name('termService');
    Route::get('/privatePolicy/{language?}', [FooterController::class, 'privatePolicy'])->name('privatePolicy');


    
  Route::get('/{language?}', [HomeController::class, 'home'])->name('home');
});
