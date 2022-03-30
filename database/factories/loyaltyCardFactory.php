<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class loyaltyCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $rewards = [
            'Free Coffee',
            '1/2 Price Pizza',
            '50% Off',
            '£5 Voucher'
        ];

        $progress = [
            'Making a purchase in any of our stores',
            'Buying any coffee',
            'Spend over £10'
        ];

        $logoPosition = [
            'Left',
            'Center',
            'Right'
        ];

        $logoShape = [
            'Circle',
            'Square'
        ];

        $stampsRequired = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10
        ];

        $numOfStamps = [
            5, 10
        ];

        $colours = [
            '141414',
            '79c267',
            'f5d63d',
            'f28c33',
            'bf62a6',
        ];

        $fontColour = [
            '000000',
            'ffffff',
        ];

        $stampSelector = [
            0, 1, 2, 3
        ];

        return [
            'cardTitle' => $this->faker->name(),
            'cardDesc' => $this->faker->text(),
            'cardReward' => Arr::random($rewards),
            'cardProgressMethod' => Arr::random($progress),
            'cardLogoPosition' => Arr::random($logoPosition),
            'cardLogoShape' => Arr::random($logoShape),
            'cardStampsRequired' => Arr::random($stampsRequired),
            'cardNumOfStamps' => Arr::random($numOfStamps),
            'cardBackgroundColour' => '#' . Arr::random($colours),
            'cardFontColour' => '#' . Arr::random($fontColour),
            'cardSlotOne' => Arr::random($stampSelector),
            'cardSlotTwo' => Arr::random($stampSelector),
            'cardSlotThree' => Arr::random($stampSelector),
            'cardSlotFour' => Arr::random($stampSelector),
            'cardSlotFive' => Arr::random($stampSelector),
            'cardSlotSix' => Arr::random($stampSelector),
            'cardSlotSeven' => Arr::random($stampSelector),
            'cardSlotEight' => Arr::random($stampSelector),
            'cardSlotNine' => Arr::random($stampSelector),
            'cardSlotTen' => Arr::random($stampSelector),
        ];
    }
}
