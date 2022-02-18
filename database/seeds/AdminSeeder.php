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
        $data = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('1234567')

        ];

        DB::table('admins')->insert($data);
    }
}
