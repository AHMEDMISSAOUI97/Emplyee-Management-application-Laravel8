<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});
Route::group(['prefix' => 'user' , 'middelware'=>'auth'], function()

 {
    Route::get('/adduser',[App\Http\Controllers\UserController::class,'adduser'])->name('add_user_view');
    Route::post('/add',[App\Http\Controllers\UserController::class,'add'])->name('add_user');
    Route::get('/display',[App\Http\Controllers\UserController::class,'display'])->name('users_list_view');
    Route::get('/profile',[App\Http\Controllers\UserController::class,'profile'])->name('user_profile_view');
    Route::get('/show/{users}',[App\Http\Controllers\UserController::class,'show'])->name('user_detail_view');
    Route::get('/edit/{users}',[App\Http\Controllers\UserController::class,'edit'])->name('update_user_view');
    Route::get('/editUser/{users}',[App\Http\Controllers\UserController::class,'editUser'])->name('update_user_profile_view');
    Route::put('/update/{id}',[App\Http\Controllers\UserController::class,'update'])->name('update_user');
    Route::put('/updateUser/{id}',[App\Http\Controllers\UserController::class,'updateUser'])->name('update_user_profile');
    Route::get('/destroy/{users}',[App\Http\Controllers\UserController::class,'destroy'])->name('delete_user');


});
    Route::group(['prefix' => 'project' ,'middelware'=>'auth'], function() {
        Route::get('/addproject',[App\Http\Controllers\ProjectController::class,'addproject'])->name('add_project_view');
        Route::post('/add',[App\Http\Controllers\ProjectController::class,'add'])->name('add_project');
        Route::get('/display',[App\Http\Controllers\ProjectController::class,'display'])->name('projects_list_view');
        Route::get('/displayProject',[App\Http\Controllers\ProjectController::class,'displayProject'])->name('user_projects_list_view');
        Route::get('/edit/{projects}',[App\Http\Controllers\ProjectController::class,'edit'])->name('update_project_view');
        Route::put('/update/{id}',[App\Http\Controllers\ProjectController::class,'update'])->name('update_project');
        Route::get('/destroy/{projects}',[App\Http\Controllers\ProjectController::class,'destroy'])->name('delete_project');

});
Route::group(['prefix' => 'leave' ,'middelware'=>'auth'], function() {
    Route::get('/addleave',[App\Http\Controllers\LeaveConrtoller::class,'addleave'])->name('add_leave_view');
    Route::post('/add',[App\Http\Controllers\LeaveConrtoller::class,'add'])->name('add_leave');
   // Route::get('/display',[App\Http\Controllers\ProjectController::class,'display'])->name('projects_list_view');

});

Route::get('/test',[App\Http\Controllers\TestController::class, 'test']);

Route::group(['middelware'=>'auth'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();


