<?php
use Illuminate\Support\Facades\Route;
Route::model('task','Task');
Route::get('/edit/{id}','App\Http\Controllers\TaskController@edit');
Route::post('/edit', 'App\Http\Controllers\TaskController@update');
Route::get('task/{id}', 'App\Http\Controllers\TaskController@show');

Route::get('/showtask','App\Http\Controllers\TaskController@index');
Route::get('/create','App\Http\Controllers\TaskController@create');
Route::post('/store', 'App\Http\Controllers\TaskController@store');
Route::get('/delete/{id}', function ($id) {
    return View::make('tasks.delete')->with('id',$id);

});

Route::post('/delete', 'App\Http\Controllers\TaskController@destroy');

Route::get('/', function () {
    return View::make('home');

});


Route::get('/about', function () {
    return View::make('about');

});

Route::get('/contact', function () {
    return View::make('contact',['subject'=>"",'message'=>'']);

});

Route::post('/contact', function (Request $request) {
    $data=$request::all();
    $rules=[
        'subject'=>'required',
        'message'=>'required'        
    ];
    $validator = Validator::make($data, $rules);
    if($validator->fails()) {
        return Redirect::to('contact')->withErrors($validator)->withInput();
    }
    return view('contact',['message'=>$data['message'],'subject'=>$data['subject']]);

});


