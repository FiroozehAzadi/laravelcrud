<?php
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
Auth::routes();
  
  

    Route::resource('roles',RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);


Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact')->with(['message'=>'','subject'=>'']);
});
Route::post('/contact', function (Request $request) {
    $message=$request::input('message');
    $subject=$request::input('subject');
    return view('contact')->with(['message'=>$message,'subject'=>$subject]);
});
Route::get('/create', function () {
    return view('tasks.createTask');
});
Route::post('/store','App\Http\Controllers\TaskController@store');
Route::get('/edit/{id}','App\Http\Controllers\TaskController@edit');
Route::post('/edit','App\Http\Controllers\TaskController@update');
Route::get('/delete/{id}',function($id){
    return view('tasks.delete')->with("id", $id);

});
Route::post('/delete','App\Http\Controllers\TaskController@destroy')->middleware('auth:admin');;

 Route::get('/showtask','App\Http\Controllers\TaskController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
