<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\bidController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\subCategoryController;
use App\Http\Controllers\auctionController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\receiptController;
use App\Http\Controllers\paymentController;
use Illuminate\Http\Request;


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
    return view('index');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
});

Route::get('/sign-up', function () {
    return view('auth.sign-up');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/add_listing', function () {
    return view('add_listing');
})->middleware('auth')->name('add_listing');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('login');

Route::get('/admin/admin_index', function () {
    return view('admin.admin_index');
})->middleware('auth')->name('admin_index');

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->middleware('auth')->name('profile');

Route::get('/admin/create_category', function () {
    return view('admin.create_category');
})->middleware('auth')->name('create_category');

Route::get('/admin/categories', function () {
    return view('admin.categories');
})->middleware('auth')->name('categories');

Route::get('/admin/create_user', function () {
    return view('admin.create_user');
})->middleware('auth')->name('create_user');

Route::get('/admin/users', function () {
    return view('admin.users');
})->middleware('auth')->name('users');

Route::get('/admin/pending_users', function () {
    return view('admin.pending_users');
})->middleware('auth')->name('pending_users');

Route::get('/admin/inactive_users', function () {
    return view('admin.inactive_users');
})->middleware('auth')->name('inactive_users');

Route::get('/admin/buy_now_payments', function () {
    return view('admin.buy_now_payments');
})->middleware('auth')->name('buy_now_payments');

Route::get('/my-auctions', function () {
    return view('my-auctions');
})->middleware('auth')->name('my-auctions');

Route::get('/my-bids', function () {
    return view('my-bids');
})->middleware('auth')->name('my-bids');

Route::get('/view-auction/{id}', function () {
    return view('view-auction');
})->middleware('auth')->name('view-auction');

Route::get('/buy-now/{id}', function () {
    return view('buy-now');
})->middleware('auth')->name('buy-now');

Route::get('/invoice/{id}', function () {
    return view('invoice');
})->middleware('auth')->name('invoice');

Route::get('/invoices', function () {
    return view('invoices');
})->middleware('auth')->name('invoices');

Route::get('/auction', function () {
    return view('auction');
})->name('auction');

// admin controller routes
Route::post('/login_admin', [adminController::class, 'login']);
Route::get('/admin/users', [usersController::class, 'activeUsers']);
Route::get('/admin/pending_users', [usersController::class, 'pendingUsers']);
Route::get('/admin/inactive_users', [usersController::class, 'inactiveUsers']);
Route::get('/admin/create_category',[categoryController::class, 'index']);
Route::get('/admin/categories', [categoryController::class, 'retrieveCategory']);
Route::get('/admin/subcategories', [subCategoryController::class, 'index']);

// auction controller routes
Route::post('/create_auction', [auctionController::class, 'store']);
Route::get('/my-auctions', [auctionController::class, 'myAuctions']);
Route::get('/view-auction/{id}', [auctionController::class, 'show']);
Route::get('/buy-now/{id}', [auctionController::class, 'showBuyNow']);
Route::get('/auction', [auctionController::class, 'index']);

// bid controller routes 
Route::get('/my-bids', [bidController::class, 'index']);
Route::post('/submit_bid', [bidController::class, 'store']);
Route::post('/buy_now', [bidController::class, 'buyNow']);

// user controller routes
Route::post('/update_profile', [usersController::class, 'updateProfile']);
Route::post('/update_password', [usersController::class, 'updatePassword']);
Route::post('/create_user', [usersController::class, 'store']);
Route::get('users/{id}', [usersController::class, 'show'])->name('users.show');
Route::post('/delete_user', [usersController::class, 'destroy']);
Route::post('/edit_user', [usersController::class, 'editUser']);

// category controller routes
Route::post('/create_category', [categoryController::class, 'store']);
Route::get('/add_listing', [categoryController::class, 'listingCategory']);
Route::post('/add_listing', [SubCategoryController::class, 'listingSubCategory']);
Route::post('/delete_category', [categoryController::class, 'destroy']);
Route::get('categories/{id}', [categoryController::class, 'show'])->name('categories.show');
Route::post('/edit_category', [categoryController::class, 'update']);

// subcategory controller routes
Route::post('/create_subcategory', [subCategoryController::class, 'store']);
Route::get('subcategories/{id}', [subCategoryController::class, 'show'])->name('subcategories.show');
Route::post('/delete_subcategory', [subCategoryController::class, 'destroy']);
Route::post('/edit_subcategory', [subCategoryController::class, 'update']);

// invoice controller routes
Route::get('/invoice/{id}', [invoiceController::class, 'show']);

// receipt controller routes 
Route::post('/store_receipt', [receiptController::class, 'store']);

// payment controller routes 
Route::get('/admin/buy_now_payments', [paymentController::class, 'index']);
Route::get('buy_now_payments/{id}', [paymentController::class, 'show'])->name('buy_now_payments.show');
Route::post('/controlPayment', [paymentController::class, 'controlPayment']);

require __DIR__.'/auth.php';
