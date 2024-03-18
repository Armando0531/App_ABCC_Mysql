<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

return Route::resource('alumnos', AlumnoController::class);
