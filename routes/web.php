<?php

use App\Http\Controllers\cvcontroller;
use App\Http\Controllers\jobcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::get('/edit/{cv}',[cvcontroller::class,'edit'])->name('cv.edit');
    Route::get('/singlejob/{job}',[jobcontroller::class,'show'])->name('jobs.show');
    Route::get('/singlejob/{job}/edit',[jobcontroller::class,'edit'])->name('jobs.edit');
    Route::get('/jobform',[jobcontroller::class,'create']);
    Route::delete('/singlejob/{job}/delete',[jobcontroller::class,'destroy'])->name('jobs.delete');
    Route::post('/create',[jobcontroller::class,'store']);
    Route::get('/logout',[usercontroller::class,'logout']);
    Route::put('/{job}/update',[jobcontroller::class,'update'])->name('jobs.update');
    Route::get('/user/manage',[usercontroller::class,'manage']);
    Route::post('/user/cv/store',[cvcontroller::class,'store']);
    Route::get('/cv/edit',[cvcontroller::class,'redirect']);
    Route::get('/user/edit',[usercontroller::class,'edit']);
    Route::put('/{cv}/replace',[cvcontroller::class,'replace'])->name('cv.replace');
    Route::delete('/{cv}/delete',[cvcontroller::class,'destroy'])->name('cv.delete');
    

});


Route::get('/',[jobcontroller::class,'index']);

Route::get('/job/manage',[jobcontroller::class,'redirect']);



Route::post('/postjob',[jobcontroller::class,'store']);



Route::get('/login',[usercontroller::class,'index'])->name('login');
Route::get('/signup',[usercontroller::class,'show']);
Route::post('/create',[usercontroller::class,'store']);

Route::post('/authenticate',[usercontroller::class,'authenticate']);

