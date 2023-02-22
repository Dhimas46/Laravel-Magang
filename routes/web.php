<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
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
})->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'auth')->middleware('guest');
    Route::get('/logout', 'logout')->middleware('auth');

});

Route::controller(StudentController::class)->middleware('auth')->group(function () {
    Route::get('/student', 'index');
    Route::post('/student', 'store')->middleware(['must-admin-or-teacher']);
    Route::get('/student/{id}', 'show')->middleware(['must-admin-or-teacher']);
    Route::get('/add-student', 'create')->middleware('must-admin-or-teacher');
    Route::get('/edit-student/{id}', 'edit')->middleware('must-admin-or-teacher');
    Route::put('/student/{id}', 'update')->middleware('must-admin-or-teacher');
    Route::get('/delete-student/{id}', 'delete')->middleware('must-admin');
    Route::get('/student-deleted', 'deletedStudent')->middleware('must-admin');
    Route::get('/student/{id}/restore', 'restore')->middleware('must-admin');
});


Route::controller(ClassController::class)->middleware('auth')->group(function () {
    Route::get('/class', 'index');
    Route::get('/class-detail/{id}', 'show');
});

Route::controller(ExtracurricularController::class)->middleware('auth')->group(function () {
    Route::get('/extracurricular', 'index');
    Route::get('/extracurricular-detail/{id}', 'show');

});

Route::controller(TeacherController::class)->middleware('auth')->group(function () {
    Route::get('/teachers', 'index');
    Route::get('/detail-teacher/{id}', 'show');
});
