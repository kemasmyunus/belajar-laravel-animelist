<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

Route::resource('anime', AnimeController::class);
