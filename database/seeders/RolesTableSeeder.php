<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'admin',
        ]);
        DB::table('roles')->insert([
            'name' => 'Scout',
            'description' => 'scout',
        ]);
        DB::table('roles')->insert([
            'name' => 'TeamManager',
            'description' => 'teammanager',
        ]);
        DB::table('roles')->insert([
            'name' => 'Player',
            'description' => 'player',
        ]);
    }
}
