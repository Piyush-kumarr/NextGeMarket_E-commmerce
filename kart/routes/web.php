<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','/index');
Route::view('/login','/UserLogin/login');
Route::view('/SignUp','/UserLogin/signUp'); 
Route::view('/sample','/sample');
Route::view('/AllProduct','/AllProduct');
Route::view('/header','/header');

// Route::view('/test','/test');

Route::post('userRegister',[userController::class,"userRegister"]);
Route::post('/existingUser',[userController::class,"existingUser"]);
// Route::get('/product',[userController::class,"product"]);

Route::get('test', [userController::class,"product"]);
// Route::get('/product/{id}', 'userController@show')->name('product.show');

Route::get('product/{id}', [userController::class, 'show'])->name('product.show');




