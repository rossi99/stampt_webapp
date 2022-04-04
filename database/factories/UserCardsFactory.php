<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class UserCardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $slotStatus = [
            'filled',
            'empty'
        ];

        $userIDs = [
            1, 2, 3, 4, 5,
            6, 7, 8, 9, 10
        ];

        $cardIDs = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
            11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
            21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
            31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
            41, 42, 43, 44, 45, 46, 47, 48, 49, 50
        ];

        return [
            'user_id' => Arr::random($userIDs),
            'card_id' => Arr::random($cardIDs),
            'slotOneStatus' => Arr::random($slotStatus),
            'slotTwoStatus' => Arr::random($slotStatus),
            'slotThreeStatus' => Arr::random($slotStatus),
            'slotFourStatus' => Arr::random($slotStatus),
            'slotFiveStatus' => Arr::random($slotStatus),
            'slotSixStatus' => Arr::random($slotStatus),
            'slotSevenStatus' => Arr::random($slotStatus),
            'slotEightStatus' => Arr::random($slotStatus),
            'slotNineStatus' => Arr::random($slotStatus),
            'slotTenStatus' => Arr::random($slotStatus),
        ];
    }
}
