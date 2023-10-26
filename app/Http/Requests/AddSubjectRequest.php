<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSubjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Or implement your authorization logic here
    }

    public function rules(): array
    {
        return [
            'course_code' => 'required|string',
            'course_description' => 'required|string',
            'units' => 'required|integer',
        ];
    }
}


