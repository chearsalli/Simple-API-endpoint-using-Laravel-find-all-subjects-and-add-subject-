<?php

//location to access
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//extends the Model class
class Subject extends Model
{
    protected $fillable = ['course_code', 'course_description', 'units'];

     //each subject belongs to a single user
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
