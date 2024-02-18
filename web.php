<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontrol;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
    

Route::controller(UserController::class)->group(function(){
    Route::get('/','showUsers')->name('home'); 
    Route::get('/user/{id}','singleUser')->name('view.user');
    Route::get('/exit/{id}','deletedata')->name('delete.user');
    Route::post('/add','adduser')->name('adduser');       
    Route::post('/update/{id}', "updateData")->name('update.data');                  
    Route::get('/updatepage/{id}','updatepage')->name('update.page');
});
