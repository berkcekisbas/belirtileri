<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        DB::table('admins')->insert([
            'name' => str_random(10),
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('admins')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
