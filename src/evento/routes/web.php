<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('publicSite.index');
})->name('index');

Route::get('/owner', function () {
    return view('publicSite.owner');
})->name('owner');

Auth::routes();

// Route::get('/home', [HomeControlle::class, 'index'])->name('home');
// Route::post('/ownerlogin', [OwnerController::class, 'login'])->name('dashboard.login');
Route::get('/adminLogin', function () {
    return view('admin_auth/adminLogin');
})->name('adminLogin');

Route::get('/', [CategoryController::class, 'index'])->name('landing');

Route::get('/events', [EventController::class, 'index'])->name('allEvents');

Route::get('/event_show/{id}', [EventController::class, 'show2'])->name('event');

// Route::post('/events/{company_id}', [ReviewController::class, 'store'])->name('companyReview');

Route::get('singleCategory/{id}', [CategoryController::class, 'show'])->name('category');

Route::get('/search', [EventController::class, 'search'])->name('search');

// Route::post('/comments',[CommentController::class,'store'])->name('comment.store');

// Route::get('/events/{id}', [ServiceController::class, 'show'])->name('service');


Route::get('/services', function () {
    return view('publicSite.services');
})->name('services');
Route::get('/about', function () {
    return view('publicSite.about');
})->name('about');



// Route::get('/', [OwnerController::class, 'getevents'])->name('landingComp');
// Route::get('/showcompany', [OwnerController::class, 'showcompany'])->name('showcompany');
Route::resource('users', UserController::class);



//Backend Routs
//Admin Route
Route::get("add_event", [AdminController::class, 'backendcreate']);
Route::get("create_event", [AdminController::class, 'create'])->name('event.create');
Route::get("create_event", [AdminController::class, 'index'])->name('create2');
Route::post("add_event/store", [AdminController::class, 'backendstore'])->name('event.store');
Route::post("add_event/store2", [AdminController::class, 'store'])->name('store2');
Route::get("/admin", [AdminController::class, 'backendindex'])->name('event.index');
Route::get("admin/edit/{id}", [AdminController::class, 'backendedit'])->name('event.edit');
Route::post("admin/update/{id}", [AdminController::class, 'backendupdate'])->name('event.update');
Route::get("admin/destroy/{id}", [AdminController::class, 'backenddestroy'])->name('event.destroy');

//Category Route
Route::get("add_category", [CategoryController::class, 'backendcreate']);
Route::post("add_category/store", [CategoryController::class, 'backendstore'])->name('category.store');
Route::get("/category", [CategoryController::class, 'backendindex'])->name('category.index');
Route::get("category/edit/{id}", [CategoryController::class, 'backendedit'])->name('category.edit');
Route::post("category/update/{id}", [CategoryController::class, 'backendupdate'])->name('category.update');
Route::get("category/destroy/{id}", [CategoryController::class, 'backenddestroy'])->name('category.destroy');

//Booking Route
Route::get("booking_event/{id}", [BookingController::class, 'index'])->name('booking.index');
Route::post("booking_event/store/{id}", [BookingController::class, 'store'])->name('booking.store');
Route::post("booking_event/show", [BookingController::class, 'show'])->name('booking.show');
// Route::get("/backendowner", [OwnerController::class, 'backendindex'])->name('owner.index');
// Route::get("owner/edit/{id}", [OwnerController::class, 'backendedit'])->name('owner.edit');
// Route::post("owner/update/{id}", [OwnerController::class, 'backendupdate'])->name('owner.update');
// Route::get("owner/destroy/{id}", [OwnerController::class, 'backenddestroy'])->name('owner.destroy');


//User Route
Route::get("add_user", [UserController::class, 'index']);
Route::post("add_user/store", [UserController::class, 'backendstore'])->name('user.store');
Route::get("/backenduser", [UserController::class, 'backendindex'])->name('user.index');
Route::get("user/edit/{id}", [UserController::class, 'backendedit'])->name('user.edit');
Route::post("user/update/{id}", [UserController::class, 'backendupdate'])->name('user.update');
Route::get("user/destroy/{id}", [UserController::class, 'backenddestroy'])->name('user.destroy');

