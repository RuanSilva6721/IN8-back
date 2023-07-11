<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userFirst =User::first();
        $userdLast =User::orderBy('id', 'desc')->first();
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'instructions' => $this->faker->text,
            'user_id' => $this->faker->numberBetween($userFirst->id, $userdLast->id)
        ];
    }
}
