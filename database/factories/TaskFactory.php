<?php

namespace Database\Factories;

use App\Models\Folder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'folder_id' => Folder::factory(),
            'title' => $this->faker->text(30),
            'due_date' =>$this->faker->dateTimeThisCentury(),
            'Status' => 1,
        ];
    }
}
