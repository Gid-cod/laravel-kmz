<?php


use App\Http\Controllers\NewsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;

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

// Главная
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/location', [PageController::class, 'location'])->name('location');
Route::get('/dealers', [PageController::class, 'dealers'])->name('dealers');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/editprofil', [PageController::class, 'editprofil'])->name('editprofil');
Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/new', [PageController::class, 'new'])->name('new');
Route::get('/list', [PageController::class, 'list'])->name('list');
Route::get('/list/{item}', [PageController::class, 'show'])->name('show');


// Yookassa notification
Route::post("/notification", [PaymentController::class, 'handleNotification']);

// Вход
Route::prefix('login')->group(function () {
    Route::get('/', [PageController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
});

// Регистрация
Route::prefix('register')->group(function () {
    Route::get('/', [PageController::class, 'register'])->name('register');
    Route::post('/', [AuthController::class, 'register']);
});

// Руты авторизованного
Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/editprofil', [PageController::class, 'update'])->name('profile.update');
    Route::post('/user/update/{id}', [PageController::class, 'update'])->name('profile.update');
    Route::post('cart/{item}', [CartController::class, 'add'])->name('toCart');
    Route::post('cart/{item}', [PageController::class, 'add'])->name('toCart');

    Route::post('/order/create', [OrderController::class, 'store'])->name('createOrder');
    Route::get('/order/delete/{order}', [OrderController::class, 'delete'])->name('deleteOrder');
});
// Руты админа
Route::middleware('access:admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');

        Route::prefix('categories')->group(function () {
            Route::get('/', [AdminController::class, 'categories'])->name('admin.categories.index');

            Route::get('/create', [AdminController::class, 'categoriesCreate'])->name('admin.categories.createPage');
            Route::post('/create', [CategoryController::class, 'create'])->name('admin.categories.create');

            Route::get('/delete/{category}', [CategoryController::class, 'delete'])->name('admin.categories.delete');
        });
        Route::prefix('types')->group(function () {
            Route::get('/', [AdminController::class, 'types'])->name('admin.types.index');

            Route::get('/create', [AdminController::class, 'typesCreate'])->name('admin.types.createPage');
            Route::post('/create', [TypeController::class, 'create'])->name('admin.types.create');

            Route::get('/delete/{types}', [TypeController::class, 'delete'])->name('admin.types.delete');
        });
        Route::prefix('news')->group(function () {
            Route::get('/', [AdminController::class, 'news'])->name('admin.news.index');

            Route::get('/create', [AdminController::class, 'newsCreate'])->name('admin.news.createPage');
            Route::post('/create', [NewsController::class, 'create'])->name('admin.news.create');

            Route::get('/edit/{news}', [AdminController::class, 'newsUpdate'])->name('admin.news.updatePage');
            Route::post('/edit/{news}', [NewsController::class, 'edit'])->name('admin.news.edit');
            Route::get('/delete/{news}', [NewsController::class, 'delete'])->name('admin.news.delete');
        });
        Route::prefix('items')->group(function () {
            Route::get('/', [AdminController::class, 'items'])->name('admin.items.index');

            Route::get('/create', [AdminController::class, 'itemsCreate'])->name('admin.items.createPage');
            Route::post('/create', [ItemController::class, 'create'])->name('admin.items.create');

            Route::get('/edit/{item}', [AdminController::class, 'itemsUpdate'])->name('admin.items.updatePage');
            Route::post('/edit/{item}', [ItemController::class, 'edit'])->name('admin.items.edit');

            Route::get('/delete/{item}', [ItemController::class, 'delete'])->name('admin.items.delete');
        });
        Route::prefix('files')->group(function () {
            Route::get('/', [AdminController::class, 'report'])->name('admin.files.index');
            Route::post('/create', [AdminController::class, 'filesCreate'])->name('admin.files.create');
            Route::get('/show/{id}', [AdminController::class, 'filesShow'])->name('admin.files.show');
            Route::get('/download/{id}', [AdminController::class, 'filesDownload'])->name('admin.files.download');
            Route::get('/delete/{file}', [AdminController::class, 'delete'])->name('admin.files.delete');
        });

        Route::prefix('orders')->group(function () {
            Route::get('/', [AdminController::class, 'orders'])->name('admin.orders.index');
            Route::get('cancel/{order}', [OrderController::class, 'cancelOrder'])->name('admin.orders.cancel');
            Route::get('confirm/{order}', [OrderController::class, 'confirmOrder'])->name('admin.orders.confirm');
        });
    });
});

