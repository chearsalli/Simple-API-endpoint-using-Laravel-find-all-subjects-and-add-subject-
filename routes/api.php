<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\SubjectController;

Route::get('/find-all-subjects', [ApiController::class, 'findAllSubjects']);


Route::post('/add-subject', [SubjectController::class, 'addSubject']);

// Add the route for deleting a subject
Route::delete('/subject/{id}', [SubjectController::class, 'deleteSubject']);
//Route::delete('/subjects/{id}', 'SubjectController@destroy');



Route::resource('subjects', SubjectController::class);

// for partial update
//Route::patch('/subjects/{id}', 'SubjectController@patchSubject');
Route::patch('/subject/{id}', [SubjectController::class, 'patchSubject']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
