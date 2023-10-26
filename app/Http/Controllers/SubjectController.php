<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Http\Requests\AddSubjectRequest;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return response()->json($subjects, 200);
    }

    public function create()
    {
        
    }

    public function addSubject(AddSubjectRequest $request)
    {
        $data = $request->validated();

        $subject = Subject::create($data);

        return response()->json($subject, 201);
    }

    public function show($id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found'], 404);
        }

        return response()->json($subject, 200);
    }

    public function edit($id)
    {
        
    }

    public function update(AddSubjectRequest $request, $id)
    {
        $subject = Subject::find($id);

        if (!$subject) {
            return response()->json(['message' => 'Subject not found'], 404);
        }

        $data = $request->validated();

        $subject->update($data);

        return response()->json($subject, 200);
    }


    public function patchSubject(AddSubjectRequest $request, $id)
{
    $subject = Subject::find($id);

    if (!$subject) {
        return response()->json(['message' => 'Subject not found'], 404);
    }

    $data = $request->validated();

    // Loop through the fields in the request data and update only the existing fields.
    foreach ($data as $field => $value) {
        if ($field !== 'id') { // Exclude the 'id' field, if present.
            $subject->$field = $value;
        }
    }

    $subject->save();

    return response()->json($subject, 200);
    return response()->json(['message' => 'Subject deleted successfully'], 200);
}



    public function deleteSubject($id)
{
        $subject = Subject::find($id);

        if ($subject) {

            $subject->delete();

            return response()->json(['message' => 'Subject deleted successfully'], 200);
            
    }else

    return response()->json(['message' => 'Subject not found'], 404);
} 






}
