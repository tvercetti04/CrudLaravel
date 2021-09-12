<?php

use App\Http\Controllers\CrudController;
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
    return view('home');
});

// Route::get('/add', function(){
//     return view('addInfo');
// })->name('add-info');

Route::match(['post', 'get'] , '/add',[CrudController::class, 'insertInfo'])->name('add-info');

Route::get('/', [CrudController::class, 'info'])->name('view-info');
Route::delete('info-delete/{id}',[CrudController::class,'deleteInfo'])->name('info-delete');
Route::get('info-update/{id}',[CrudController::class,'updateInfo'])->name('info-update');

Route::put('/update-info', [CrudController::class, 'update'])->name('updated');
