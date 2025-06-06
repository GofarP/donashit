<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->group(function () {
    //group route with middleware "auth"
    Route::group(['middleware' => 'auth'], function () {

        Route::resource('/category',CategoryController::class,['as'=>'admin']);

        //route dashboard
        Route::get('/dashboard', [
           DashboardController::class,
            'index'
        ])->name('admin.dashboard.index');
    });

});
