<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;

Route::post('login', [AuthController::class, 'login']);
Route::get('cidades', [CidadeController::class, 'index']);
Route::get('medicos', [MedicoController::class, 'index']);
Route::get('cidades/{id}/medicos', [MedicoController::class, 'indexByCidade']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('auth/logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);

    Route::post('medicos/consulta', [MedicoController::class, 'agendarConsulta']);

    Route::post('medicos', [MedicoController::class, 'store']);

    Route::post('pacientes', [PacienteController::class, 'store']);
    Route::put('pacientes/{id}', [PacienteController::class, 'update']);
    Route::get('medicos/{id_medico}/pacientes', [PacienteController::class, 'indexByMedico']);
});
