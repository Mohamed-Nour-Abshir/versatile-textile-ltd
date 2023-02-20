<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[FrontEndController::class,'index']);
Route::get('/about',[FrontEndController::class,'about'])->name('about');
Route::get('/gallery',[FrontEndController::class,'gallery'])->name('gallery');
Route::get('/news',[FrontEndController::class,'news'])->name('news');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');

Route::get('/mens-item',[FrontEndController::class,'mensItem'])->name('mensItem');
Route::get('/boys-item',[FrontEndController::class,'boysItem'])->name('boysItem');
Route::get('/girls-item',[FrontEndController::class,'girlsItem'])->name('girlsItem');
Route::get('/kids-item',[FrontEndController::class,'kidsItem'])->name('kidsItem');
Route::get('/ladies-item',[FrontEndController::class,'ladiesItem'])->name('ladiesItem');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('sliders', HomeSliderController::class);
    Route::resource('products',ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('reviews',ReviewController::class);
    Route::resource('certifications',CertificationController::class);
});

require __DIR__.'/auth.php';
