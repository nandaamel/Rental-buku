<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\facades\DB;




class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Schema::disableForeignKeyConstraints();
        //Role::truncate();
        //Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value
        //     ]);
        // }

        DB::table('users')->insert([
            [ 
            'name' => 'anggrek',
            'email' => 'anggrek@gmail.com',
            'password' => Hash::make('amel123'),
            'no_hp' => '081574429626',
            'address' => 'tajur',
            'role_id' => 1
            ],
            [
            'name' => 'nanda',
            'email' => 'nanda@gmail.com',
            'password' => Hash::make('nanda123'),
            'no_hp' => '081574429626',
            'address' => 'bogor',
            'role_id' => 2
            ]

            ]);
    }
}
