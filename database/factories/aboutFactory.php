<?php

namespace Database\Factories;

use App\Models\about;
use App\Models\blogs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<about>
 */
class aboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blog_id'=> blogs::factory(),
            'thumbnail' => $this->faker->imageUrl(),
            'nama' => $this->faker->name(),
            'jurusan' => $this->faker->word(),
            'institusi' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
