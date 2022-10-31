<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;

use App\Http\Controllers\Dashboard\DashboardController;



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



Route::get('language/{locale}', function ($locale) {

    app()->setLocale($locale);

    session()->put('locale', $locale);

    return redirect()->back();
})->name('language');



Route::prefix('admin')->middleware('localization')->namespace('Dashboard')->name('admin.')->group(function () {

    /* Auth Routes */
    Route::get('login', [AuthController::class , 'showLoginForm'])->name('login');
    Route::post('login',[AuthController::class , 'login'] )->name('login.post');
    Route::get('logout',[AuthController::class , 'logout'])->name('logout');


    /* Dashboard Routes */
    Route::middleware('auth')->group(function () {

        Route::get('/', [DashboardController::class , 'home'])->name('home');

        // admins
        Route::resource('/admins' , 'AdminController');
        Route::get('profile', 'AdminController@profile')->name('profile');
        Route::post('update-profile', 'AdminController@updateProfile')->name('update_profile');

        // users
        Route::resource('/users' , 'UserController');
        Route::get('/user-orders/{id}' , 'UserController@orders')->name('user.orders');

        // categories
        Route::resource('/categories' , 'CategoryController');

        // tags
        Route::resource('/tags' , 'TagController');

        // products
        Route::resource('/products' , 'ProductController');

        // orders
        Route::get('/orders' , 'OrderController@orders')->name('orders.index');
        Route::get('/order-completed' , 'OrderController@order_completed')->name('orders.completed');
        Route::get('/order-canceld' , 'OrderController@order_canceld')->name('orders.canceld');
        Route::get('/order-waiting' , 'OrderController@order_waiting')->name('orders.waiting');
        Route::get('/order-details/{id}' , 'OrderController@show')->name('orders.show');
        Route::put('/update-order/{id}' , 'OrderController@update_status')->name('orders.update');

        // countries
        Route::resource('/countries' , 'CountryController');

        // cities
        Route::resource('/cities' , 'CityController');

        // user Fav
        Route::get('customer-fav' , 'FavouriteController@index')->name('favourites');

        // Settings
        Route::resource('settings', 'SettingController');

        // contactUs
        Route::get('/contacts' , 'ContactController@index')->name('contacts');

         // coupons
         Route::resource('/coupons' , 'CouponController');



    });
});


