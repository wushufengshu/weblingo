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
            'email' => 'casepack123@gmail.com',
            'address' => 'Cavite',
            'admin_at' => 'Super Admin',
            'type' => 'super_admin',
            'password' => bcrypt('asdasd')
        ]); 
        Admin::create([
            'first_name' => 'Nikki',
            'last_name' => 'Vista',
            'email' => 'nhyangnyang@gmail.com',
            'address' => 'Cavite',
            'admin_at' => 'HTML5',
            'type' => 'admin',
            'password' => bcrypt('asdasd')
        ]); 

        // foreach (range(1, 3) as $index) 
        // {

        // 	Admin::create([
	       //      'first_name' => $faker->firstName,
        //         'last_name' => $faker->lastName,
	       //      'email' => $faker->email,
	       //      'address' => $faker->address,
        //         'admin_at' => 'HTML5',
        //         'type' => 'admin',
	       //      'password' => bcrypt('asdasd')
        // 	]);	
        // }
        // foreach (range(1, 3) as $index) 
        // {

        //     Admin::create([
        //         'first_name' => $faker->firstName,
        //         'last_name' => $faker->lastName,
        //         'email' => $faker->email,
        //         'address' => $faker->address,
        //         'admin_at' => 'CSS3',
        //         'type' => 'admin',
        //         'password' => bcrypt('asdasd')
        //     ]); 
        // }
    }
}
