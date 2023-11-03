<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'image' => 'picture' . rand(1,10) . '.jpg',
            'gender' => $this->faker->word(),
            'race' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'skills_id' => rand(1, Skill::count()),
        ];
    }
}
