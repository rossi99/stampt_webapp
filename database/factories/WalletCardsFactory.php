<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class WalletCardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cardIDs = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
            11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
            21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
            31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
            41, 42, 43, 44, 45, 46, 47, 48, 49, 50
        ];

        $slotStatus = [
            'filled',
            'empty'
        ];

        return [
            'card_id' => Arr::random($cardIDs),
            'slotOne' => Arr::random($slotStatus),
            'slotTwo' => Arr::random($slotStatus),
            'slotThree' => Arr::random($slotStatus),
            'slotFour' => Arr::random($slotStatus),
            'slotFive' => Arr::random($slotStatus),
            'slotSix' => Arr::random($slotStatus),
            'slotSeven' => Arr::random($slotStatus),
            'slotEight' => Arr::random($slotStatus),
            'slotNine' => Arr::random($slotStatus),
            'slotTen' => Arr::random($slotStatus),
        ];
    }
}
