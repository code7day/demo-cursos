<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lesson::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' =>  1,
            'name' =>  $this->faker->text(40),
            'summary' =>  $this->faker->paragraph(1),
            'number' => $this->faker->unique()->randomDigit+1,
            'content' => $this->faker->paragraph(5),
        ];
    }
}
