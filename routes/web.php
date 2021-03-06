<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\BookController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File as FacadesFile;

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

Route::get('', function () {
    $posts = Post::all();
    return view('posts', ['posts' => $posts]);
  
});

   
Route::get('hello', function () {
    return view('layouts.main');
});
Route::get('hello/student', function () {
    return view('student');
});
Route::get('hello/class', function () {
    return view('class');
});

Route::get('posts/{post}',function($slug){
    return view('post', [
        'post' => Post::find($slug)
    ]);

})->where('post','[A-z_\-]+');



// Route::get('admin/dashboard/student',   [TestController::class, 'student']);
Route::get('admin/dashboard/score',     [TestController::class, 'score']);



// Route::get('/student',                          [StudentController::class, 'index'])->name('dashboard.student.index');
// Route::get('/score',                          [TestController::class, 'index_a'])->name('dashboard.score.index_a');

// Route::get('/student/create',                   [StudentController::class, 'create'])->name('dashboard.student.create');
// Route::post('/student/store',           [StudentController::class, 'store'])->name('student.store');
// Route::post('/student/delete/{id}',           [StudentController::class, 'destroy'])->name('student.destroy');
// Route::get('/student/update/{id}',              [StudentController::class, 'update'])->name('dashboard.student.update');
// Route::post('/student/update/submit/{id}',      [StudentController::class, 'update_submit'])->name('dashboard.student.update_submit');
Route::resource('student', StudentController::class);
Route::resource('profile', ProfileController::class);
Route::resource('book', BookController::class);

// Route::get('/score/create',                   [ScoreController::class, 'create'])->name('dashboard.score.create');
// Route::post('/score/create/submit{id}',       [ScoreController::class, 'create_submit'])->name('dashboard.score.create_submit');
// Route::post('/score/delete/submit',           [ScoreController::class, 'delete_submit'])->name('dashboard.score.delete_submit');
// Route::get('/score/update',              [ScoreController::class, 'update'])->name('dashboard.score.update');
// Route::post('/score/update/submit/{id}',      [ScoreController::class, 'update_submit'])->name('dashboard.score.update_submit');