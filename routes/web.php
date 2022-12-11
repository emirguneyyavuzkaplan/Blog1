<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;

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
    //MAKALE ROUTE
    Route::get('makaleler/silinenler',[ArticleController::class,'trashed'])->name('trashed');
    Route::resource('makaleler', ArticleController::class);
    Route::get('/switch',[ArticleController::class,'switch'])->name('switch');
    Route::get('/deletearticle/{id}',[ArticleController::class,'delete'])->name('delete.article');
    Route::get('/harddeletearticle/{id}',[ArticleController::class,'hardDelete'])->name('hard.delete.article');
    Route::get('/recoverarticle/{id}',[ArticleController::class,'recover'])->name('recover.article');


    //CATEGORİ ROUTE
    Route::get('/kategoriler',[CategoryController::class,'index'])->name('category.index');
    Route::post('/kategoriler/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/kategoriler/update',[CategoryController::class,'update'])->name('category.update');
    Route::post('/kategoriler/delete',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/kategori/status',[CategoryController::class,'switch'])->name('category.switch');
    Route::get('/kategori/getData',[CategoryController::class,'getData'])->name('category.getdata');
    //
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







