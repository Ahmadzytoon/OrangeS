<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'team_id' => '1',
            'question' => 'question one - abdelmajied',
        ]);
        DB::table('questions')->insert([
            'team_id' => '1',
            'question' => 'question two - abdelmajied',
        ]);
        DB::table('questions')->insert([
            'team_id' => '1',
            'question' => 'question three - abdelmajied',
        ]);
        DB::table('questions')->insert([
            'team_id' => '2',
            'question' => 'question one - zaitoun',
        ]);
        DB::table('questions')->insert([
            'team_id' => '2',
            'question' => 'question two - zaitoun',
        ]);
        DB::table('questions')->insert([
            'team_id' => '2',
            'question' => 'question three - zaitoun',
        ]);
    }
}
