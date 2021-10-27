<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' =>  $this->faker->text(15),
            'name' =>  $this->faker->text(40),
            'description' =>  $this->faker->paragraph(5),
            'image' => 'https://picsum.photos/300/200'
        ];
    }
}
