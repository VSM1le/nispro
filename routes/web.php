<?php

use App\Http\Controllers\AddpartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\CommonerController;
use App\Http\Controllers\PladminController;
use App\Models\NissanIssue;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('' , fn()=> to_route('dashboard'));

// Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/scanner', [ScanController::class,'index'])->middleware(['auth', 'verified','role:scanner'])->name('scanner');
Route::post('/scanner/issuesubmit',[ScanController::class,'scan'])->middleware(['auth', 'verified','role:scanner'])->name('submitissue');






Route::middleware(['auth','role:superAdmin|plAdmin'])->group(function(){
    Route::get('/part',[AddpartController::class, 'index'])->name('addpart');
    Route::post('/part/postpart',[AddpartController::class,'store'])->name('submmitpart');
    Route::get('/History',[PladminController::class, 'index'])->name('history');
});




Route::get('/superadmin', function () {
    return view('superadmin.index');
})->middleware(['auth','role:superAdmin'])->name('superadmin.index');
// 'verifield'


Route::middleware(['auth','role:commoner'])->group(function(){
    Route::get('/commoner',[CommonerController::class, 'index'])->name('commoner');
    Route::put('/commoner/unlock',[CommonerController::class,'update'])->name('unlockU');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
