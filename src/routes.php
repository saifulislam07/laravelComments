<?php

// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Config;

// Route::post('comments', [Config::get('comments.controller')::class,'store'] )->name('comments.store');
// Route::delete('comments/{comment}', [Config::get('comments.controller')::class,'destroy'])->name('comments.destroy');
// Route::put('comments/{comment}', [Config::get('comments.controller')::class,'update'])->name('comments.update');
// Route::post('comments/{comment}', [Config::get('comments.controller')::class,'reply'])->name('comments.reply'); -->


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;

Route::post('comments', Config::get('comments.controller') . '@store')->name('comments.store');
Route::delete('comments/{comment}', Config::get('comments.controller') . '@destroy')->name('comments.destroy');
Route::put('comments/{comment}', Config::get('comments.controller') . '@update')->name('comments.update');
Route::post('comments/{comment}', Config::get('comments.controller') . '@reply')->name('comments.reply');