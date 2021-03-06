<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Livewire\Employees;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //     Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
    //     Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    //     Route::get('/employees/id/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    //     Route::get('/employees/id', [EmployeeController::class, 'show'])->name('employees.show');
    //     Route::delete('/employees/id', [EmployeeController::class, 'destroy'])->name('employees.destroy');

    Route::get('employees-livewire', Employees::class)->name('employees-livewire');
});

Route::resource('employees', EmployeeController::class)->middleware(['auth']);


require __DIR__ . '/auth.php';
