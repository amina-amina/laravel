<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserDashController;
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
///pages
Route::get('/', [PagesController::class, 'home'])->name('home'); //home
Route::get('/selectform', [PagesController::class, 'selectform'])->name('selectform'); //home
Route::get('/filtreCategorie/{id}', [PagesController::class, 'filtreCategorie'])->name('filtreCategorie'); //filtreCategorie
Route::get('/listings', [PagesController::class, 'allListings'])->name('listings'); //listings
Route::post('/bookmarkPost', [PagesController::class, 'bookmarkPost'])->name('bookmarkPost'); //bookmarkPost
Route::get('/detaillisting/{id}', [PagesController::class, 'detaillisting'])->name('detaillisting'); //detaillisting
Route::get('/blog', [PagesController::class, 'blog'])->name('blog'); //blog
Route::get('/FAQ', [PagesController::class, 'FAQ'])->name('FAQ'); //FAQ
Route::get('/contact', [PagesController::class, 'contact'])->name('contact'); //contact

Route::post('/searchform', [PagesController::class, 'searchform'])->name('searchform'); 


// Route::get('/dash', function () {
//     return view('dash');
// })->middleware(['auth'])->name('dashboard');
Route::group(["middleware" => "auth"], function () {
    /// dashboard user
    Route::get('/dashboard', [UserDashController::class, 'dashboard'])->name('dashboard'); //dashboard
    Route::get('/dashboardlayout', [UserDashController::class, 'dashboardlayout'])->name('dashboardlayout'); //dashboard

    Route::get('/dashboard/addlisting', [UserDashController::class, 'addlisting'])->name('addlisting'); //addlisting
    Route::post('/dashboard/submitlisting', [UserDashController::class, 'submitlisting'])->name('submitlisting'); //addlisting

    Route::get('/dashboard/userListing', [UserDashController::class, 'userListings'])->name('userListings'); //userlisttings
    Route::get('/dashboard/updateListing/{id}', [UserDashController::class, 'updateListing'])->name('updateListing'); //userlisttingsEdit
    Route::put('editListing/{id}', [UserDashController::class, 'editListing'])->name('editListing'); //userlisttingsEdit
    Route::delete('/dashboard/userListingDelete/{id}', [UserDashController::class, 'userListingsDelete'])->name('userListingDelete'); //userlisttingsDelete


    Route::get('/dashboard/bookmarks', [UserDashController::class, 'bookmarks'])->name('bookmarks'); //bookmarks
    Route::delete('/dashboard/bookmarkDelete/{id}', [UserDashController::class, 'bookmarkDelete'])->name('bookmarkDelete'); //bookmarkDelete

    Route::get('/dashboard/profile', [UserDashController::class, 'userProfile'])->name('userProfile'); //profile
    Route::post('/dashboard/addProfile/{id}', [UserDashController::class, 'addProfile'])->name('addProfile'); //profile
    Route::get('/dashboard/changePassword', [UserDashController::class, 'changePassword'])->name('changePassword'); //profile
    Route::post('/dashboard/submitPassword', [UserDashController::class, 'submitPassword'])->name('submitPassword'); //changepwd

    Route::post('/dashboard/accept_post/{id}', [UserDashController::class, 'accept_post'])->name('accept_post'); //accept_post
    Route::post('/dashboard/refuse_post/{id}', [UserDashController::class, 'refuse_post'])->name('refuse_post'); //refuse_post

   

});
Route::get('resetpassword', [UserDashController::class, 'resetpassword'])->name('resetpassword'); //changepwd



require __DIR__ . '/auth.php';