<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $role = $this->faker->randomElement(['alumni', 'member', 'founder',]);
        // if($role == 'member'){
        //     $jabatan = rand(1,5);
        // }
        // else{
        //     $jabatan = null;
        // }

        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'jabatan_id' => $jabatan,
        //     'email_verified_at' => now(),
        //     'password' =>  Hash::make('aaa'), // password
        //     'role' => $role,
        //     'remember_token' => Str::random(10),
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
