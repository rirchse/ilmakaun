<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\BlogController;
use App\Http\Controllers\dashboard\PortfolioController;
use App\Http\Controllers\dashboard\GalleryController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\dashboard\MailController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller( HomeController::class )->group( function() {
    Route::get('/', 'index')->name('home.index');
    Route::get('/blog', 'blog')->name('home.blog');
    Route::get('/blog/{id}', 'show')->name('home.blog.show');
    Route::get('/portfolio', 'portfolio')->name('home.portfolio');
    Route::get('/portfolio/{id}', 'PortfolioShow')->name('home.portfolio.show');
    Route::get('/gallery', 'galleryIndex')->name('home.gallery');
    Route::get('/contact', 'contact')->name('home.contact');
    Route::post('/form1', 'form1')->name('home.contactForm');
    Route::post('/form2', 'form2')->name('home.contactStore');
    Route::get('/test_mail', 'testMail');
});

Route::controller( LoginController::class )->group(function() {
    Route::get('/login', 'show')->name('login');
    Route::post('/login', 'authentication')->name('login.post');
    Route::post('/logout', 'logout')->name('logout.post');
});

/* Auth Route Start */
Route::middleware(['auth', 'auth.session'])->group(function(){
    Route::controller( DashboardController::class )->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/settings', 'settings')->name('settings');
        Route::put('/settings/{id}', 'saveSettings')->name('saveSettings');
        Route::get('/customer', 'customerIndex')->name('customer');
    });
    Route::prefix('/dashboard')->group(function() {
        Route::resource('/blog', BlogController::class);
        Route::resource('/portfolio', PortfolioController::class);
        Route::resource('/gallery', GalleryController::class);
        Route::resource('/product', ProductController::class);
    });
});
/* Auth Route End */