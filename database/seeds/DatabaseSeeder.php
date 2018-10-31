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
         DB::table('admins')->insert([
            'admin_name' => 'jalis mahamud tarif',
            'admin_email' => 'jalis@laravel.com',
            'admin_password' => md5(12345),
        ]);
    }
}
