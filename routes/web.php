<?php

use App\Http\Controllers\ProfileController;
use App\Models\Video;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', function () { return Inertia::render('Welcome', [ 'videos' => Video::select('videos.*', 'users.name as user_name', 'users.email as user_email')
        ->join('users', 'videos.user', '=', 'users.id')->inRandomOrder()->get() ]); })->name('home');
    Route::get('/add-video', function () {return Inertia::render('AddVideo'); })->name('addVideo');
    Route::get('/delete-video', function () { return Inertia::render('DeleteVideo', [ 'videos' => Video::where('user', auth()->id())->get() ]); })->name('deleteVideo');

    Route::get('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'show'])->name('videos.show');
    Route::post('/addvideo', [\App\Http\Controllers\VideosController::class, 'store'])->name('videos.store');
    Route::delete('/videos/{id}', [\App\Http\Controllers\VideosController::class, 'destroy'])->name('videos.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';