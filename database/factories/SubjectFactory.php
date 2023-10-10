<?php

namespace Database\Factories;

use App\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition()
    {
        return [
            'course_code' => $this->faker->unique()->word,
            'course_description' => $this->faker->sentence,
            'units' => $this->faker->numberBetween(1, 4),
        ];
    }
}
