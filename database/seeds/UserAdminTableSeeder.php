<?php

use Illuminate\Database\Seeder;
use \App\Admin;

class UserAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Admin::truncate();

        Admin::create([
                'first_name' => 'Den',
                'last_name' => 'Casquejo',
                'email' => 'redencasquejo@gmail.com',
                'address' => 'Cavite',
                'password' => bcrypt('asdasd')
            ]); 

        foreach (range(1, 15) as $index) 
        {

        	Admin::create([
	            'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
	            'email' => $faker->email,
	            'address' => $faker->address,
	            'password' => bcrypt('asdasd')
        	]);	
        }
    }
}
