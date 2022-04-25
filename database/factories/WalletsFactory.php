<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class WalletsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userIDs = [
            1, 2, 3, 4, 5,
            6, 7, 8, 9, 10
        ];

        return [
            'user_id' => Arr::random($userIDs),
        ];
    }
}
