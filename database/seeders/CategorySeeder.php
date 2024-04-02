<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['nama' =>'Mr. Sterling Johnston','category_url'=>'mr-sterling-johnston'],
            ['nama' => 'Miss Vernie Witting V','category_url'=>'miss-vernie-witting-v'],
            ['nama' => 'Polly Kilback','category_url'=>'polly-kilback']
            
        ]);
    }
}
