<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FormulasController;


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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/formulas/lista', [FormulasController::class, 'list'])->name('formulas.list');

Route::resource('formulas', FormulasController::class);


require __DIR__.'/auth.php';
