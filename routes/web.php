<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileEdit;
use App\Http\Controllers\UpdatePassword;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AddItem;
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

Route::get('/welcomes', function () {
    return view('welcomes',[
        "items"=> Item::get()]);
});
Route::redirect('/','welcomes');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/isi', function () {
    $item = Item::paginate(5);
    $updatedItems = $item->getCollection();
    $item->setCollection($updatedItems);
    return view('isi', [
        "items"=> $item]);
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/history', function () {
    return view('transactionhistory');
});

// Route::get('/search', function () {
//     return view('Search.search');
// });

Route::get('/profile', function () {
    return view('Profile.profile');
});


Route::get('/change-pass', [UpdatePassword::class, 'changePassword'])->name('change-password');
Route::post('/change-pass', [UpdatePassword::class, 'updatePassword'])->name('update-password');

Route::get('/edit-profile',[ProfileEdit::class,'edit'])->name('edit-profile');
Route::post('/edit-profile',[ProfileEdit::class, 'profileUpdate'])->name('update-profile');

Route::get('/add-item',[AddItem::class,'view'])->name('add-item');
Route::post('/add-item',[AddItem::class, 'additem'])->name('add-items');

Route::get('/detailitem/{id}', [HomeController::class,"detail"]);
Route::get('/search',[HomeController::class,"search"]);

