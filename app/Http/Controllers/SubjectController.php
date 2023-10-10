<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject; // Import the Subject model

class SubjectController extends Controller
{
    public function deleteSubject($id)
    {
        try {
            $subject = Subject::findOrFail($id);
            $subject->delete();
    
            return response()->json(['message' => 'Subject deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Unable to delete subject', 'error' => $e->getMessage()], 500);
        }
    }
    
}
