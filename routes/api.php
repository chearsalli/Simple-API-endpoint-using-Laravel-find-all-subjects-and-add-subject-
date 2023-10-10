<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/find-all-subjects', [ApiController::class, 'findAllSubjects']);
Route::post('/add-subject', [ApiController::class, 'addSubject']);

//to delete a subject
Route::delete('/delete-subject/{id}', 'SubjectController@deleteSubject');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
