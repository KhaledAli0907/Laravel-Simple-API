<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\StudentAccessMiddleware;
use App\Http\Controllers\studentController;

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

// Routes for student end point
// middleware(StudentAccessMiddleware::class)->
// middleware('auth')->
Route::controller(studentController::class)->middleware('auth')->prefix('students')->group(function () {
    Route::get("/", "index")->name('students.index');
    // Route::get('/{id}', "getUser");
    // Route::get('/{id}/{name?}', 'getUserName');
    Route::get('/create', 'getCreatedUser')->name('students.create');
    Route::post('/', "store")->name('students.store');
    Route::get('/{id}/edit', "editUser")->name('students.edit');
    Route::put('/{id}/update', 'update')->name('students.update');
    Route::delete('/{id}/destroy', 'destroy')->name('students.destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
