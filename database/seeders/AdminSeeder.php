<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    public function run()
    {
        $admin = [
            'name' => 'MD SHAMIM',
            'email' => 'mdshamimcsecu77@gmail.com',
            'password' => bcrypt('12345678')
        ];
        Admin::create($admin);
    }
}
