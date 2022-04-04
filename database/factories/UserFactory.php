<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $accountType = [
            'customer',
            'business'
        ];

        return [
            'accountType' => Arr::random($accountType),
            'avatarSrc' => 'image.png',
            'fullName' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contactNumber' => $this->faker->phoneNumber(),
            'addressLineOne' => $this->faker->address(),
            'addressLineTwo' => 'Larne',
            'addressState' => 'Antrim',
            'addressCode' => $this->faker->postcode(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
