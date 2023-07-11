<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
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
        $recipeFirst =Recipe::first();
        $recipedLast =Recipe::orderBy('id', 'desc')->first();
        return [
            'user_id' => $this->faker->numberBetween($userFirst->id, $userdLast->id),
            'recipe_id' => $this->faker->numberBetween($recipeFirst->id, $recipedLast->id),
        ];
    }
}
