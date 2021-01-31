<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
	return view('welcome');
});
Route::middleware('auth')->group(function () {
	Route::prefix('/dashboard')->group(function () {
		Route::get('/', function () {
			return view('dashboard.dashboard');
		})->name('dashboard');
		Route::get('/user', function () {
			return view('dashboard.user.index');
		})->middleware('role:admin');
		Route::get('/role', function () {
			return view('dashboard.role.index');
		})->middleware('role:root');
		Route::get('/kelas', function () {
			return view('dashboard.kelas.index');
		});
		Route::get('/guru', function () {
			return view('dashboard.guru.index');
		});
		Route::get('guru/template', [GuruController::class, 'template']);
		Route::get('pengguna', function () {
			return view('dashboard.pengguna.index');
		});
	});
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
