<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventControler;



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

Auth::routes();

Route::get('/home', [EventControler::class, 'index']);
Route::get('/', [EventControler::class , 'index'])->name('home');
Route::delete('delete/{id}', [EventControler::class , 'destroy'])->name('delete');
Route::get('/create', [EventControler::class , 'create'])->name('createEvent')->middleware('isadmin');
Route::post('/', [EventControler::class , 'store'])->name('storeEvent');
Route::get('/edit/{id}', [EventControler::class , 'edit'])->name('editEvent');
Route::patch('/event/{id}', [EventControler::class , 'update'])->name('updateEvent');
Route::get('/show/{id}', [EventControler::class , 'show'])->name('showEvent');
