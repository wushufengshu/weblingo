<?php

use Illuminate\Database\Seeder;

class CodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Code::truncate();
        $admin = \App\Admin::first()->id;

        Code::create([
                'course_id' => $admin,
                'lesson_id' => 1,
                'heading' => 'A Simple HTML Document',
                'html-code' => '<!DOCTYPE html>
        <html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>',
                'css-code' => '',
                'javascript-code' => ''

        ]);
    }
}
