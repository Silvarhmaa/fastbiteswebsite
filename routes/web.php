<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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
    return view('fastbites.home', [
        'products' => config('fastbites.products'),
    ]);
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.store');
    Route::get('/register', [AuthController::class, 'showRegistration'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])
        ->middleware('throttle:5,1')
        ->name('register.store');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/dashboard', function () {
    $role = Auth::user()->role;

    abort_unless(in_array($role, ['consumer', 'seller', 'admin'], true), 403);

    return redirect()->route('dashboard.'.$role);
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    foreach (['consumer', 'seller', 'admin'] as $role) {
        Route::get('/dashboard/'.$role, function () use ($role) {
            return view('fastbites.dashboard', compact('role'));
        })->middleware('role:'.$role)->name('dashboard.'.$role);
    }
});
