<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JobController;


Route::middleware('auth')->group(function () {

    Route::get('/jobs', [JobController::class, 'list_jobs']);
    Route::get('/jobs/{job_id}', [JobController::class, 'detail_job']);
    Route::post('/jobs', [JobController::class, 'create_job']);
    Route::put('/jobs/{job_id}', [JobController::class, 'update_job']);
});
