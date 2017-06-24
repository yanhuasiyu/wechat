<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(['name' => 'yanhuasiyu', 'email' => '20984557@qq.com', 'password' => bcrypt('123456')]);
    }
}
