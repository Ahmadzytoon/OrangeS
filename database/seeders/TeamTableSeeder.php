<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'team_name' => 'OptiGuide',
            'description' => "OptiGuide, a cutting-edge visual aid, consists of an AI-powered mobile app and two tactile wristbands. The AI model's predictions guide users with low vision through vibrations.",
        ]);
        DB::table('teams')->insert([
            'team_name' => 'Solar-AgriBot',
            'description' => 'AgriBot is an Autonomous Agricultural Robot transforming modern farming. It integrates precision weed detection, eradication, real-time soil and plant health monitoring, and smart irrigation',
        ]);
        DB::table('teams')->insert([
            'team_name' => 'AiGo',
            'description' => 'AiGO is your pocket-sized time-travel guide buddy, providing immersive historical tours and interactive experiences at your fingertips.',
        ]);
        DB::table('teams')->insert([
            'team_name' => 'Tefli',
            'description' => "TEFLI is a baby monitoring device that analyzes and predicts a baby's needs based on their cry.",
        ]);
        DB::table('teams')->insert([
            'team_name' => 'BagGuard',
            'description' => 'BaGuard is revolutionizing travel with its state-of-the-art luggage tracking system. Offering airport geofencing properties and advanced damage detection capabilities, BaGuard ensures your belongings are secure and easily traceable, enhancing the travel experience for all.',
        ]);
    }
}
