<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\registerController;

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
    return view('welcome');
});


Route::get('/helloworld', function () {
    return view('helloworld');
});

Route::get('/register', function () {
    return view('register');
})->name('register.show');



Route::post('/register/add',[userController::class ,'register' ])->name('register.add');
Route::get('/showData' , [userController::class, 'showData'])->name('user.data');
Route::delete('/showData/delete/{id}' , [userController::class, 'destroy'])->name('user.delete');
Route::get('/showEditForm/{id}', [userController::class, 'showEdit'])->name('user.editform');
Route::put('/showEditForm/update/{id}', [userController::class, 'update'])->name('user.update');