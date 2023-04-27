<?php

use App\Listeners\LogVerifiedUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MachineController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\AssessmentController;

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
})->name('welcome');    

Route::get('/url', function(){
    return view('assessment.url');
});


Route::get('/first', [AssessmentController::class, 'firstUrl']);
Route::get('/second', [AssessmentController::class, 'secondUrl']);

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // USERS CONTROLLER
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/users/{id}/update', [UserController::class, 'update'])->name('user.update');

    // CATEGORY CONTROLLER
    Route::resource('categories', CategoryController::class);
    Route::controller(CategoryController::class)->group(function(){
        Route::patch('/categories/{id}/active','updateStatus')->name('categories.status');
    });

    // DEPARTMENT CONTROLLER
    Route::resource('departments', DepartmentController::class);
    Route::controller(DepartmentController::class)->group(function(){
        Route::patch('/departments/{id}/active','updateStatus')->name('departments.status');
    });

    // EMPLOYEE CONTROLLER
    Route::resource('employees', EmployeeController::class);
    Route::controller(EmployeeController::class)->group(function(){
        Route::patch('/employees/{id}/active','updateStatus')->name('employees.status');
    });
    
    // UNITS OF MEASUREMENT CONTROLLER
    Route::resource('units', UnitController::class);
    Route::controller(UnitController::class)->group(function(){
        Route::patch('/units/{id}/active','updateStatus')->name('units.status');
    });

    // POSITIONS CONTROLLER
    Route::resource('positions', PositionController::class);
    Route::controller(PositionController::class)->group(function(){
        Route::patch('/positions/{id}/active','updateStatus')->name('positions.status');
    });

    // ITEMS CONTROLLER
    Route::resource('items', ItemController::class);
    Route::controller(ItemController::class)->group(function(){
        Route::patch('/items/{id}/active','updateStatus')->name('items.status');
    });

    // MACHINES CONTROLLER
    Route::resource('machines', MachineController::class);
    Route::controller(MachineController::class)->group(function(){
        Route::patch('/machines/{id}/active','updateStatus')->name('machines.status');
    });

    // SUPPLIER CONTROLLER
    Route::resource('suppliers', SupplierController::class);
    Route::controller(SupplierController::class)->group(function(){
        Route::patch('/suppliers/{id}/active','updateStatus')->name('suppliers.status');
    });

});



require __DIR__.'/auth.php';
