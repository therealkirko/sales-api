<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;


Route::get('order/{id}', [LinkController::class, 'index'])->name('link.order');

