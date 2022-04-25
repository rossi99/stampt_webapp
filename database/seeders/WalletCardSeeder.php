<?php

namespace Database\Seeders;

use App\Models\WalletCards;
use Illuminate\Database\Seeder;

class WalletCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WalletCards::factory()
            ->count(5)
            ->create();
    }
}
