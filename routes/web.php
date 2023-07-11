<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Transactions\SearchAction;
use App\Http\Livewire\Admin\Transactions\Lists;
use App\Http\Livewire\Admin\Transactions\Search;
use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Http\Livewire\Welcome;

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

Route::get('/', HomeController::class)->name('/');
Route::get('/login', HomeController::class)->name('login');
Route::post('/logout', [UserController::class,'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [Dashboard::class,'render'])->name('admin.dashboard');
    Route::get('admin/transactions/all', [Lists::class,'render'])->name('admin.transactions.all');
    Route::get('admin/transactions/search', [Search::class,'render'])->name('admin.transactions.search');
    Route::get('admin/transaction/{transid}', [SearchAction::class,'render'])->name('admin.transactions.action');
    Route::get('/home', [Welcome::class,'render'])->name('home');
   
});
// Route::get('/', [Login::class,'render'])->name('/');

// Route::get('/', function () {
//     return view('welcome');
// })->name('/');
