<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function findAllSubjects()
    {
        $subjects = Subject::all();
        return response()->json($subjects);
    }

    // public function addSubject(Request $request)
    // {
    //     $data = $request->validate([
    //         'course_code' => 'required|string',
    //         'course_description' => 'required|string',
    //         'units' => 'required|integer',
    //     ]);

    //     $subject = Subject::create($data);

    //     return response()->json($subject, 201);
    // }
}
