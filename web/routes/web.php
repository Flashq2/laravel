<?php

use App\Http\Controllers\HomeScreenController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' =>'dashboard'],function(){
    Route::get('/home',[HomeScreenController::class,'index']);
});


Route::group(['prefix' =>'sale'],function(){
    Route::get('/sale',[SellController::class,'index']);
});

Route::group(['prefix' =>'setting'],function(){
    Route::get('/setting',[SettingController::class,'index']);
    Route::post('/submit',[SettingController::class,'Submmit']);
    //setting/submit
});

