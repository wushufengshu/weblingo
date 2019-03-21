<?php

use Illuminate\Database\Seeder;
use App\Video;
use App\Media;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Video::truncate();

        $video = Video::create([
            'admin_id' => 2,
            'title' => 'HTML Video Tutorial',
            'slug' => 'html_video_tutorial',
            'description' => 'Frontend Masters, HTML. All courtesy to Brian Holt'
        ]); 
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'Hypertext Markup Language', 
        	'video' => '1-0-HTML-Hypertext_Markup_Language', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Hypertext Markup Language Introduction'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'My First Web Page', 
        	'video' => '1-1-HTML-My_First_Web_Page', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Creating First Web Page'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML Tags-Meta Content', 
        	'video' => '1-2-HTML-HTML_Tags_-_Meta_Content', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Tags Meta Content'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'Exercise 1: Creating a new page', 
        	'video' => '1-3-HTML-Exercise_1_Creating_a_New_Page', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Creating a new Page'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'Exercise 1: Solution', 
        	'video' => '1-4-HTML-Exercise_1_Solution', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Exercis 1 Solution'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML Audience Questions', 
        	'video' => '1-5-HTML-HTML_Audience_Questions', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Audience Questions'
        ]);

        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML Review', 
        	'video' => '1-6-HTML-Review', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Review'
        ]);

        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML Tags - Void Tags', 
        	'video' => '1-7-HTML-HTML_Tags_-_Void_Tags', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Exercis 1 Solution'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML Tags - Grouping', 
        	'video' => '1-8-HTML-HTML_Tags_-_Grouping', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Tags - Grouping'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML Classess', 
        	'video' => '1-9-HTML-HTML_Classes', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'All about HTML Classess'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'HTML IDs', 
        	'video' => '1-10-HTML-HTML_IDs', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'All about HTML IDs'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'Tags Naming', 
        	'video' => '1-11-HTML-HTML_Tags_-_Naming', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Tags naming'
        ]);
        Media::create([
            'admin_id' => 2,
            'video_id'=> $video->id,
            'title' => 'Exercise 2: Giving Classess', 
            'video' => '1-12-HTML-Exercise_2_-_Giving_Classes', 
            'ext' => 'mp4',
            'mime_type' => 'video/mp4',
            'description' => 'Exercis 2 Giving Classess'
        ]);
        Media::create([
            'admin_id' => 2,
        	'video_id'=> $video->id,
        	'title' => 'Exercise 2: Solution', 
        	'video' => '1-13-HTML-Exercise_2_-_Solution', 
        	'ext' => 'mp4',
        	'mime_type' => 'video/mp4',
        	'description' => 'Exercis 2 Solution'
        ]);

        $video2 = Video::create([
            'admin_id' => 2,
            'title' => 'HTML Video Tutorial By kuya tim',
            'slug' => 'html_tutorial_by_kuya_time',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quod quos laboriosam nisi fuga aspernatur voluptates, explicabo delectus, odio in saepe reiciendis temporibus, itaque rerum error sequi mollitia nobis doloribussss'
        ]); 
        Media::create([
            'admin_id' => 2,
            'video_id'=> $video2->id,
            'title' => 'input tit;e bar', 
            'video' => 'input title bar tutorial', 
            'ext' => 'mp4',
            'mime_type' => 'video/mp4',
            'description' => 'input title bar by kuya tim'
        ]);




    }
}
