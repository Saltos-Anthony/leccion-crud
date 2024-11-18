<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\VehiculoController;



Routes::get('vehiculos', [VehiculoController::class, 'index']);
Routes::get('vehiculos/{id}', [VehiculoController::class, 'show']);
Routes::post('vehiculos', [VehiculoController::class, 'store']);
Routes::put('vehiculos/{id}', [VehiculoController::class, 'update']);
Routes::delete('vehiculos/{id}', [VehiculoController::class, 'destroy']);