<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\WatchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/achievement-overview', function () {
    return view('movies/achievement-overview');
})->name('achievement-overview');

Route::get('/sign-in', function () {
    return view('movies/sign-in');
})->name('sign-in');

Route::get('/sign-up', function () {
    return view('movies/sign-up');
})->name('sign-up');

// Route::get('/add-watched', function () {
//     return view('movies/add-watched');
// })->name('add-watched');

Route::resource('/movies', MovieController::Class)->names([
    'index' => 'movies.index',
    'show' => 'movies.show'
]);

// Route::get('/movies', [MovieController::Class, 'index'])->name('movies.index');

// Route::get('/movies/{movie}', [MovieController::Class, 'show'])->name('movies.show');

Route::get('/search', SearchController::Class)->name('search');

Route::resource('/search/store', WatchController::Class)->names([
    'store' => 'search.store'
]);

Route::resource('/actors', ActorController::Class)->names([
    'index' => 'actors.index',
    'show' => 'actors.show'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

// Practices below




Route::get('/users/{name}/{age}', function($name, $age){
    
    $height=1.8;

    return view('test', compact('name','age','height'));
});

Route::get('/dogs/{num}', function($num){

    $max = config('app.max');
    
    return view('dogs', compact('num','max'));
});


Route::get('/', function (Request $request) {

    $name = $request->query('name');
    $age = $request->input('age');
    $height = $request->height;

    return view('welcome', compact('name','age','height'));
});







