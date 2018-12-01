<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Content::truncate();
        $admin = \App\Admin::first()->id;
        Content::create([
        		'admin_id' => $admin,
                'title' => 'HTML Paragraphs',
                'slug' => 'html_paragraphs',
                'body' => 'The HTML <p> element defines a paragraph:'

            ]
        ); 
    }
}
