<?php

use Illuminate\Database\Seeder;
use \App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $faker = Faker\Factory::create();

        Course::truncate();
        $admin = \App\Admin::first()->id;
        Course::create([
        		'admin_id' => $admin,
                'name' => 'HTML5',
                'description' => 'HTML Tutorial',
                'slug' => 'html'
            ]
        ); 
        Course::create([
                'admin_id' => $admin,
                'name' => 'CSS3',
                'description' => 'CSS is a language that describes the style of an HTML document.  CSS describes how HTML elements should be displayed.  This tutorial will teach you CSS from basic to advanced.',
                'slug' => 'css'
            ]
        ); 
        Course::create([
                'admin_id' => $admin,
                'name' => 'JAVASCRIPT',
                'description' => 'JavaScript is the programming language of HTML and the Web.  JavaScript is easy to learn.  This tutorial will teach you JavaScript from basic to advanced.',
                'slug' => 'javascript'
            ]
        ); 
        Course::create([
                'admin_id' => $admin,
                'name' => 'JQUERY',
                'description' => 'jQuery is a JavaScript Library.  jQuery greatly simplifies JavaScript programming.  jQuery is easy to learn.',
                'slug' => 'jquery'
            ]
        ); 
    }
}
//fix db seed
