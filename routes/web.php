<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
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

Route::get('/',[HomepageController::class, 'index']);
Route::get('/blog/{article_slug}','Front\Homepagecontroller@single')->name('single');
