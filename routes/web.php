<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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

// routes/web.php

// routes/web.php

use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');


Route::get('/driver/dashboard', function () {
    return view('driver_dashboard');
})->name('driver.dashboard')->middleware('auth');

Route::get('/passenger/dashboard', function () {
    return view('passenger_dashboard');
})->name('passenger.dashboard')->middleware('auth');


Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login.form');
})->name('logout');
