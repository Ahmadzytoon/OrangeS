<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
          'name' => 'Ahmad.Orange',

            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Marwan Jumaa',
            'email' => 'marwan@gmail.com',
            'password' => Hash::make('orange'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Eng.Rana Dababneh',
            'email' => 'rana@gmail.com',
            'password' => Hash::make('orange'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Mothana Gharaibeh',
            'email' => 'Mothana@gmail.com',
            'password' => Hash::make('orange'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Dr.Ashraf Bany Mohammad',
            'email' => 'ashraf@gmail.com',
            'password' => Hash::make('orange'),
            'image' => 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png',
        ]);

    }
}
