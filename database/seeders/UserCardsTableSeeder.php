<?php

namespace Database\Seeders;

use App\Models\UserCards;
use Illuminate\Database\Seeder;

class UserCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCards::factory()
        ->count(50)
        ->create();
    }
}
