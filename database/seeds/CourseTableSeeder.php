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
                'description' => 'HyperText Markup Language (HTML) is a simple markup system used to create hypertext documents that are portable from one platform to another.',
                'slug' => 'html',
                'image' => 'HTML5-LOGO_1543265372.png'
            ]
        ); 
        Course::create([
                'admin_id' => $admin,
                'name' => 'CSS3',
                'description' => 'CSS is a language that describes the style of an HTML document.  CSS describes how HTML elements should be displayed.  This tutorial will teach you CSS from basic to advanced.',
                'slug' => 'css',
                'image' => 'CSS3-LOGO_1543329627.png'
            ]
        ); 
        Course::create([
                'admin_id' => $admin,
                'name' => 'JAVASCRIPT',
                'description' => 'JavaScript is the programming language of HTML and the Web.  JavaScript is easy to learn.  This tutorial will teach you JavaScript from basic to advanced.',
                'slug' => 'javascript',
                'image' => 'JAVASCRIPT-LOGO_1543331559.png'
            ]
        ); 
    }
}
//fix db seed
