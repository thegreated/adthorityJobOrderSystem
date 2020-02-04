<?php

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
Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/project/pending/{id}', function () {
    return view('project.pending');
});

Route::get('/project/accepted/{id}', function ($id) {
    return view('project.accepted');
});

Route::get('/project/rejected/{id}', function ($id) {
    return view('project.rejected');
});

Route::get('/project/cancel/{id}', function ($id) {
    return view('project.cancel');
});

Route::resource('/client', 'CompanyController');

Route::get('/report', function () {
    return view('report.show');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group([
//     'prefix' => 'projects'
// ],function(){
//     Route::get('/','ProjectController@getHome');
//     Route::get('pending','ProjectController@getPending');
//     Route::get('accept','ProjectController@getAccept');
//     Route::get('cancel','ProjectController@getCancel');
//     Route::get('reject','ProjectController@getReject');

// });

