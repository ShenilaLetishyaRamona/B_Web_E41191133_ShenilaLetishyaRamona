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

// Route::get('/', function () {
    
//     return view('home');
// });

// Route::get('users','ManagementUserController@index');

Route::resource('user','ManagementUserController');

Route::group(['namespace' => 'Frontend'],
    function () {
        Route::resource('/home', HomeController::class);
    }
);

Auth::routes();
Route::middleware(['auth'])->group(function () {

    Route::group(['namespace' => 'Backend'],
        function () {
            Route::resource('/dashboard', DashboardController::class);
            Route::resource('/pendidikan', PendidikanController::class);
            Route::resource('/pengalaman_kerja', PengalamanKerjaController::class);
        }
    );

});