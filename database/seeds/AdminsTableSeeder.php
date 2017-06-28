<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Admin::truncate();
        factory('App\Admin')->create([
				'name' => 'yanhuasiyu',
        		'email' => '20984557@qq.com',
                'password' => bcrypt('123456')
            ]);
    }
}
