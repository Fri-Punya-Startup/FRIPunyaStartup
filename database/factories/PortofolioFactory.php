<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(1,3));
        $slug = Str::slug($title, '-');

        return [
            'product' => $title,
            'slug' => $slug,
            'type_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->paragraph(mt_rand(5,10)),
            'web' => $this->faker->url,
            'contact' => $this->faker->phoneNumber,
        ];
    }
}
