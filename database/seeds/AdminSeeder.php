<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'Xuber',
            'email' => 'admin@xuber.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
