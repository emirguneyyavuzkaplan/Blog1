<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------

*/
Route::get('admin/panel',[Dashboard::class,'index'])->name('admin.dashboard');
Route::get('admin/giris',[AuthController::class,'login'])->name('admin.login');
Route::post('admin/giris',[AuthController::class,'loginPost'])->name('admin.login.post');






/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------

*/

Route::get('/',[HomepageController::class, 'index'])->name('homepage');
Route::get('/sayfa',[HomepageController::class,'index']);
Route::get('/iletisim',[HomepageController::class,'contact'])->name('contact');
Route::post('/iletisim',[HomepageController::class,'contactpost'])->name('contact.post');
Route::get('/kategori/{category}',[HomepageController::class,'category'])->name('kategori');
Route::get('/{category}/{article_slug}',[HomepageController::class,'single'])->name('single');
Route::get('/{sayfa}',[HomepageController::class,'page'])->name('page');







