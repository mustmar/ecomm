<?php


use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\WishlistController;

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
    return view('welcome');
});



/* Route::get('/item/home', [App\Http\Controllers\ItemController::class, 'index'])->name('item.home');
Route::get('/item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('item.create');
Route::put('/item/create', [App\Http\Controllers\ItemController::class, 'store'])->name('item.store'); */


//category routes
Route::middleware(['auth','isadmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.all');
    Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');


});
//products routes

Route::middleware(['auth', 'isadmin'])->group(function () {
    Route::get('dashboard/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.all');
    Route::get('dashboard/produc', [App\Http\Controllers\ProductController::class, 'index'])->name('product.all');
    Route::get('dashboard/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::get('dashboard/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
    Route::get('dashboard/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::post('dashboard/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');


    Route::get('dashboard/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('dashboard/category/products/{id}', [App\Http\Controllers\CategoryController::class, 'catpro'])->name('category.product');
    Route::get('/wishlist/store/{id}', [App\Http\Controllers\WishlistController::class, 'store'])->name('wishlist.store');


});






//cart routes
Route::middleware(['auth'])->group(function () {
    Route::get('/produc', [App\Http\Controllers\ProductController::class, 'index'])->name('product.all');

    Route::get('/userpage', [App\Http\Controllers\HomeController::class, 'userpage'])->name('userpage');
    Route::get('/category/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.all');

    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.all');
    Route::get('/cart/store/{id}', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
    Route::get('/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.delete');


    Route::get('/category/products/{id}', [App\Http\Controllers\CategoryController::class, 'catpro'])->name('category.product');
    Route::get('/payment', [App\Http\Controllers\CheckController::class, 'index'])->name('payment');
    Route::get('/payment/create', [App\Http\Controllers\CheckController::class, 'store'])->name('payment.create');
    Route::get('dashboard/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist.index');
    Route::get('/wishlist/store/{id}', [App\Http\Controllers\WishlistController::class, 'store'])->name('wishlist.store');

});




Route::get('report', function () {
 return view('report');
});

Route::get('/sss', function () {
    return view('admin.users');

});
Auth::routes();


