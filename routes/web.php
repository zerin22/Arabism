<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
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
//     // return view('welcome');
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user/register', [HomeController::class, 'user_signup'])->name('user.signup');

/* ------------ Admin -------------- */
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'admin_login_form'])->name('admin.login.form');
    Route::post('/login/owner', [AdminController::class, 'admin_login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin.logout')->middleware('admin');

    //all User In admin
    Route::resource('user', UserController::class);
    Route::put('user_admin/update/{id}', [UserController::class, 'update_user'])->name('admin.user.update');
    Route::get('user/destory/{id}', [UserController::class, 'destory'])->name('user.destory');
    Route::get('user/inactive/{id}', [UserController::class, 'inactive'])->name('user.inactive');
    Route::get('user/active/{id}', [UserController::class, 'active'])->name('user.active');

    //Category
    Route::resource('category', CategoryController::class);
    Route::get('category_product/create', [CategoryController::class, 'create'])->name('category.product.create');
    Route::get('category/destory/{id}', [CategoryController::class, 'destory_category'])->name('category.destory');

    //product
    Route::resource('product', ProductController::class);
    Route::get('product/destory/{id}', [ProductController::class, 'destory'])->name('product.destory');


});

/* ------------ Admin -------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
