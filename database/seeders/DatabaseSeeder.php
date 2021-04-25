<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('alerts')->insert([
            'coin' => 'Bitcoin',
            'symbol' => 'BTC',
            'price' => 60000
        ]);

        DB::table('alerts')->insert([
            'coin' => 'Ethereum',
            'symbol' => 'ETH',
            'price' => 2000
        ]);

        DB::table('alerts')->insert([
            'coin' => 'Litecoin',
            'symbol' => 'LTC',
            'price' => 300
        ]);
    }
}
