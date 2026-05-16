<?php

use App\Models\ListJobs;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => ListJobs::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job_detail', [
        'job' => ListJobs::find($id)
    ]);
});
