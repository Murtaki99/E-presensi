<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\MapelContoller;
use App\Http\Controllers\ScannerController;
use App\Http\Controllers\StudentController;
use App\Models\Local;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard.index', [
        'title' => 'Dashboard',
    ]);
});
Route::get('/login', function () {
    return view('auth.login.index',);
});
Route::get('/register', function () {
    return view('auth.register.index',);
});


Route::get('/dashboard/students/checkSlug', [StudentController::class, 'checkSlug']);
// ROUTE STUDENTS
Route::resource('/dashboard/students', StudentController::class);
// EDN ROUTE STUDENTS

Route::resource('/dashboard/scans', ScannerController::class);

//Master data Routes
Route::resource('/dashboard/locals', LocalController::class);
//Maple Route
Route::get('/dashboard/mapels/checkSlug', [MapelContoller::class, 'checkSlug']);
Route::resource('/dashboard/mapels', MapelContoller::class);

