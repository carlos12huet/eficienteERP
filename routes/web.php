<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/',[AdminController::class,'index'])->middleware('auth')->name('index');

Route::prefix('empleados')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/',[EmployeeController::class,'index'])->name('employees');
    Route::get('/crear',[EmployeeController::class,'create'])->name('create_employee');
    Route::get('/verificacion_masiva',[EmployeeController::class,'export_rfc'])->name('export_rfc');
    Route::post('/agregar',[EmployeeController::class,'store'])->name('store_employee');

    Route::post('importacion_masiva',[EmployeeController::class,'uploadZip'])->name('uploadZip');
    Route::post('subir_documento/{id}',[EmployeeController::class,'uploadDocument'])->name('uploadDocument');
    Route::post('subir_datos/{id}',[EmployeeController::class,'checkCIF'])->name('check_rfc');

    Route::get('subir_documento/continue',[EmployeeController::class,'continue'])->name('continue_employee');
    Route::get('subir_documento/edit',[EmployeeController::class,'edit_data'])->name('edit_data_employee');
});
