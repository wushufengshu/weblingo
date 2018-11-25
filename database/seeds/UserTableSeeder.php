<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        User::create([
                'first_name' => 'Asd',
                'last_name' => 'Asdasd',
                'email' => 'asd@asd.asd',
                'password' => bcrypt('asdasd')
            ]); 

        foreach (range(1, 7) as $index) 
        {
        	User::create([
	            'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
	            'email' => $faker->email,
	            'password' => bcrypt('asdasd')
        	]);	
        }
    }
}
