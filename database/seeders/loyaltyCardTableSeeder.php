<?php

namespace Database\Seeders;

use App\Models\loyaltyCard;
use Illuminate\Database\Seeder;

class loyaltyCardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        loyaltyCard::factory()
            ->count(25)
            ->create();
    }
}
