<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'name' => 'Euro',
            'symbol' => 'EUR',
        ]);
        Currency::create([
            'name' => 'Dollar',
            'symbol' => 'USD',
        ]);
    }
}
