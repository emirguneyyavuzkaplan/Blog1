<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\ArticleController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------

*/

Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function (){
Route::get('giris',[AuthController::class,'login'])->name('login');
Route::post('giris',[AuthController::class,'loginPost'])->name('login.post');


});
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function (){
    Route::get('panel',[Dashboard::class,'index'])->name('dashboard');
    Route::resource('makaleler', ArticleController::class);
    Route::get('/switch{id}',[ArticleController::class])->name('switch');
    Route::get('cikis',[AuthController::class,'logout'])->name('logout');

});

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







