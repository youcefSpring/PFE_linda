<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    // public function run()
    // {
    //     // $this->call(UsersTableSeeder::class);
    //     $this->call(CategoryDatabaseSeeder::class);
    // }
    public function run()
    {
        DB::table('admins')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
        ]);

        DB::table('vendors')->insert([
            'nom' => Str::random(10),
            'email' => 'vendeur@gmail.com',
            'password' => Hash::make('vendeur@gmail.com'),
        ]);
        DB::table('store_managers')->insert([
            'nom' => Str::random(10),
            'email' => 'stock@gmail.com',
            'password' => Hash::make('stock@gmail.com'),
        ]);
    }
}
