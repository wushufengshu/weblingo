<?php

use Illuminate\Database\Seeder;
use \App\Lesson;
use \App\Code;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Lesson::truncate();
        $admin = \App\Admin::first()->id;

        $html1 = Lesson::create([
				'admin_id' => $admin,
				'course_id' => 1,
                'title' => 'HTML Introduction',
                'slug' => 'html_introduction',
                'body' => '<h2>What is HTML?</h2>
			<p>HTML is the standard markup language for creating Web pages.</p>
			<ul>
			<li>HTML stands for Hyper Text Markup Language</li>
			  <li>HTML describes the structure of Web pages using markup</li>
			  <li>HTML elements are the building blocks of HTML pages</li>
			  <li>HTML elements are represented by tags</li>
			  <li>HTML tags label pieces of content such as &quot;heading&quot;, &quot;paragraph&quot;, &quot;table&quot;, and so on</li>
			  <li>Browsers do not display the HTML tags, but use them to render the content of the page</li>
			</ul>'
        ]); 

        Code::create([
                'course_id' => 1,
                'lesson_id' => $html1->id,
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

        $html2= Lesson::create([
        		'admin_id' => $admin,
        		'course_id' => 1,
                'title' => 'HTML Basic Examples',
                'slug' => 'html_basic_examples',
                'body' => '
					<p class="intro">Don\'t worry if these examples use tags you have not learned.</p>
					<p class="intro">You will learn about them in the next chapters.</p>
					<hr>'
        ]);

        Code::create([
        		'course_id' => 1,
                'lesson_id' => $html2->id,
                'heading' => 'html_basic_examples',
                'html-code' => 'html_basic_examples',
                'css-code' => '',
                'javascript-code' => ''

        ]);

        $html3 = Lesson::create([
        		'admin_id' => $admin,
        		'course_id' => 1,
                'title' => 'HTML Documents',
                'slug' => 'html_documents',
                'body' => '
<p>All HTML documents must start with a document type declaration: <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code>.</p>
<p>The HTML document itself begins with <code class="w3-codespan">&lt;html&gt;</code> and ends with <code class="w3-codespan">&lt;/html&gt;</code>.</p>
<p>The visible part of the HTML document is between <code class="w3-codespan">&lt;body&gt;</code> and <code class="w3-codespan">&lt;/body&gt;</code>. </p>

<hr>
'

        ]);

        Code::create([
        		'course_id' => 1,
                'lesson_id' => $html3->id,
                'heading' => 'HTML Basic Examples',
                'html-code' => '<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>',
                'css-code' => '',
                'javascript-code' => ''

        ]);

//         $css1=Lesson::create([
//             'admin_id' => $admin,
//             'course_id' => 2,
//             'title' => 'CSS Introduction',
//             'slug' => 'css_introduction',
//             'body' => '<h2>What is CSS?</h2>
//             <ul>
//               <li><b>CSS</b> stands for <b>C</b>ascading <b>S</b>tyle <b>S</b>heets</li>
//               <li>CSS describes <strong>how HTML elements are to be displayed on screen,  
//               paper, or in other media</strong></li>
//               <li>CSS <strong>saves a lot of work</strong>. It can control the layout of 
//               multiple web pages all at once</li>
//               <li>External stylesheets are stored in <b>CSS files</b></li>
//             </ul>
//             <hr><br><h2>Why Use CSS?</h2>
//             <p>CSS is used to define styles for your web pages, including the design, layout 
//             and variations in display for different devices and screen sizes.&nbsp;</p>
//             <hr><br><h2>CSS Solved a Big Problem</h2>
// <p>HTML was NEVER intended to contain tags for formatting a web page!</p>
// <p>HTML was 
// created to <strong>describe the content</strong> of a web page, like:</p>
// <p>&lt;h1&gt;This is a heading&lt;/h1&gt;</p>
// <p>&lt;p&gt;This is a paragraph.&lt;/p&gt;</p>
// <p>When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2 
// specification, it started a nightmare for web developers. Development of large 
// websites, where fonts and color information were added to every single  
// page, became a long and expensive process.</p>
// <p>To solve this problem, the World Wide Web Consortium (W3C) created CSS.</p>
// <p>CSS removed the style formatting from the HTML page!</p>
// <hr><br><h2>CSS Saves a Lot of Work!</h2>
// <p>The style definitions are normally saved in external .css files.</p>
// <p>With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>'
//         ]); 

//         $css2=Lesson::create([
//             'admin_id' => $admin,
//             'title' => 'CSS Syntax',
//             'slug' => 'css_syntax',
//             'body' => '<h2>CSS Syntax</h2>
//     <p>A CSS rule-set consists of a selector and a declaration block:</p>
//     <p><img src="selector.gif" alt="CSS selector" class="w3-image"></p>
//     <p>The selector points to the HTML element you want to style.</p>
//     <p>The declaration block contains one or more declarations separated by 
//     semicolons.</p>
//     <p>Each declaration includes a CSS property name and a value, separated by a colon.</p>
//     <p>A CSS declaration always ends with a semicolon, and declaration blocks are 
//     surrounded by curly braces.</p>'
//         ]);



//         Code::create([
//                 'course_id' => 2,
//                 'lesson_id' => $css2->id,
//                 'heading' => 'Example 1',
//                 '' => '',
//                 'html-code' => '<p>Hello World!</p>
//         <p>These paragraphs are styled with CSS.</p>',
//                 'css-code' => 'p {
//             color: red;
//             text-align: center;
//         } ',
//                 'javascript-code' => ''

//         ]);


    }
}
