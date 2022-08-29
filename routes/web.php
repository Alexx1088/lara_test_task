<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'],
    function () {
        Route::group(['middleware' => 'admin', 'namespace' => 'Main'],
            function () {
                Route::get('/', 'IndexController')->name('admin.main.index');
            });
        Route::group(['namespace' => 'User', 'prefix' => 'users'],
            function () {

                Route::get('/', 'IndexController')->name('admin.user.index');
                Route::get('/create', 'CreateController')->name('admin.user.create');
                Route::post('/', 'StoreController')->name('admin.user.store');
                Route::get('/{user}', 'ShowController')->name('admin.user.show');
                Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
           Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
                Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');

            });
    });

Route::get('/{user}/edit', [\App\Http\Controllers\UserController::class, 'index']);

Route::patch('/{user}', [\App\Http\Controllers\UpdateController::class, 'update'])->name('user.update');

Route::get('/user_login', [\App\Http\Controllers\UserLoginController::class, 'index'])
    ->name('user_login');
Route::post('/check_user', [\App\Http\Controllers\CheckController::class, 'index'])
    ->name('check_user');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
