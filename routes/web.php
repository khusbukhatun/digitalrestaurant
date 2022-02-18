<?php
use App\Http\Controllers\AdminLoginController;
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

Route::get('/dashboard','memberController@dashboard')->name('dashboard');

Route::get('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/admin/login/submit',[AdminLoginController::class,'login'])->name('admin.submit');
