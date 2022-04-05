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

        $status = [
            'Active',
            'Inactive'
        ];

        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'reward' => Arr::random($rewards),
            'progressMethod' => Arr::random($progress),
            'logoPosition' => Arr::random($logoPosition),
            'logoShape' => Arr::random($logoShape),
            'stampsRequired' => Arr::random($stampsRequired),
            'stampSlots' => Arr::random($numOfStamps),
            'backgroundColour' => '#' . Arr::random($colours),
            'fontColour' => '#' . Arr::random($fontColour),
            'status' => Arr::random($status),
            'slotOne' => Arr::random($stampSelector),
            'slotTwo' => Arr::random($stampSelector),
            'slotThree' => Arr::random($stampSelector),
            'slotFour' => Arr::random($stampSelector),
            'slotFive' => Arr::random($stampSelector),
            'slotSix' => Arr::random($stampSelector),
            'slotSeven' => Arr::random($stampSelector),
            'slotEight' => Arr::random($stampSelector),
            'slotNine' => Arr::random($stampSelector),
            'slotTen' => Arr::random($stampSelector),
        ];
    }
}
