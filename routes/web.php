<?php

use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::get('/singlejob/{job}',[jobcontroller::class,'show'])->name('jobs.show');
    Route::get('/singlejob/{job}/edit',[jobcontroller::class,'edit'])->name('jobs.edit');
    Route::get('/jobform',[jobcontroller::class,'create']);
    Route::delete('/singlejob/{job}/delete',[jobcontroller::class,'destroy'])->name('jobs.delete');
    Route::post('/create',[jobcontroller::class,'store']);
    Route::get('/logout',[usercontroller::class,'logout']);
    Route::put('/{job}/update',[jobcontroller::class,'update']);



});


Route::get('/',[jobcontroller::class,'index']);

Route::get('/job/manage',[jobcontroller::class,'redirect']);



Route::post('/postjob',[jobcontroller::class,'store']);



Route::get('/login',[usercontroller::class,'index'])->name('login');
Route::get('/signup',[usercontroller::class,'show']);
Route::post('/create',[usercontroller::class,'store']);

Route::post('/authenticate',[usercontroller::class,'authenticate']);

