<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PesanController;
use App\Models\Pesan;
use App\Models\Role;
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
    return view('landing');
});

Route::get('/main', function () {return view('layouts.main');
});


//Route register
Route::get('/index-register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/index-register', [AuthController::class, 'storeRegist']);

//Route login
Route::get('/index-login', [AuthController::class, 'indexlogin'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('login-auth');


Route::post('/pesan', [PesanController::class, 'storePesan'])->name('store');

    //admin dashboard
    Route::get('/book', function() {return view('dashboard.book');
    });
    Route::get('/category', function () {return view('dashboard.category');
    });
    Route::get('/rent-log', function () {return view('dashboard.rent-log');
    });
    Route::get('/dashboard', [AdminController::class,'dashboard']);
    Route::get('/user', [AdminController::class,'indexUsers'])->name('indexUser');
    
    //Route hapus dan edit 
    Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
    Route::get('/editUser/{id}', [AdminController::class, 'indexEditUsers'])->name('indexEditUser');
    
    Route::post('/user/update/{id}' , [AdminController::class, 'update'])->name('users.update');


//ROUTE USER
Route::get('/adminuser', function () {
    return view('user.index');
});

//Route logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Route book 
Route::get('/book', [BookController::class, 'book'])->name('book');
Route::get('/form', [BookController::class, 'form']);
Route::post('/book', [BookController::class, 'add'])->name('add');
Route::delete('/delete/{id}', [BookController::class, 'destroy']);

