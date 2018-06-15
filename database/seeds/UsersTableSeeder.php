<?php

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
            [
                'name' => 'Administrador',
                'email' => 'admin@admin.com',
                'password' => Hash::make('trabalhopw'),
                'is_admin' => 1,
                'is_cnpj' => 0,
                'logo_number' => 1,
            ],
            [
                'name' => 'José Amâncio',
                'email' => 'joseamanciojr2@hotmail.com',
                'password' => Hash::make('1234556789'),
                'is_admin' => 0,
                'is_cnpj' => 0,
                'logo_number' => 2,
            ],
            [
                'name' => 'Adalberto',
                'email' => 'hotdog@hotmail.com',
                'password' => Hash::make('hotelhotdog'),
                'is_admin' => 0,
                'is_cnpj' => 1,
                'logo_number' => 2,
            ]
        ]);
    }
}
