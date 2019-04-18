<?php

use Illuminate\Database\Seeder;
use App\Quiz;
use App\Question;
use App\Answer;

class HtmlQuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Quiz::truncate();

        $quiz1 = Quiz::create([
            'admin_id' => 2,
            'name' => 'HTML Quiz',
            'slug' => 'html_quiz',
            'limit' => 10
        ]); 

        $question1 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => '____________tag is used to specify an inline frame',
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => '<jframe>',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => '<iframe>',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => '<frameset>',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question1->id,
            'answer' => '<frame>',
            'correct' => 0
        ]);


        $question2 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'What is mean by DTD?',
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => 'Document type data ',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => 'Data type definition',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => 'Document type definition',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question2->id,
            'answer' => 'Definition type document',
            'correct' => 0
        ]);

        $question3 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'How many graphic object types are allowed by SVG?',
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => '2',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => '5',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => '7',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question3->id,
            'answer' => '3',
            'correct' => 1
        ]);


        $question4 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => '<canvas > element is only a ____________to the graphics.',
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => 'component',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => 'container',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => 'attribute',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question4->id,
            'answer' => 'method',
            'correct' => 0
        ]);

        $question5 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'DOM stands for',
        ]);
        Answer::create([
            'question_id' => $question5->id,
            'answer' => 'Document object model',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question5->id,
            'answer' => 'Data object model',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question5->id,
            'answer' => 'Document Oriented model',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question5->id,
            'answer' => 'Data oriented mode',
            'correct' => 0
        ]);

        $question6 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'HTML is based on which language',
        ]);
        Answer::create([
            'question_id' => $question6->id,
            'answer' => 'XHTML',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question6->id,
            'answer' => 'XML',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question6->id,
            'answer' => 'SGML',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question6->id,
            'answer' => 'DTD',
            'correct' => 0
        ]);

        $question7 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'HTML 5 supports all form controls from HTML 4?',
        ]);
        Answer::create([
            'question_id' => $question7->id,
            'answer' => 'Yes',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question7->id,
            'answer' => 'No',
            'correct' => 0
        ]);

        $question8 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'Ancestor of all other elements on the page is called________',
        ]);
        Answer::create([
            'question_id' => $question8->id,
            'answer' => 'parent',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question8->id,
            'answer' => 'ancestor',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question8->id,
            'answer' => 'root element',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question8->id,
            'answer' => 'siblings',
            'correct' => 1
        ]);

        $question9 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'The __________ is an instruction to the web browser about what version of HTML the page is written in',
        ]);
        Answer::create([
            'question_id' => $question9->id,
            'answer' => '< !DOCTYPE>',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question9->id,
            'answer' => '< DOCTYPE>',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question9->id,
            'answer' => '< TYPE>',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question9->id,
            'answer' => '< !TYPE>',
            'correct' => 0
        ]);

        $question10 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'Canvas is able to draw the 2D graphics using---------------',
        ]);
        Answer::create([
            'question_id' => $question10->id,
            'answer' => 'XML',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question10->id,
            'answer' => 'HTML',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question10->id,
            'answer' => 'Java script',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question10->id,
            'answer' => 'XHTML',
            'correct' => 0
        ]);

        $question11 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'What is W3C?',
        ]);
        Answer::create([
            'question_id' => $question11->id,
            'answer' => 'World Wide Web Consortium',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question11->id,
            'answer' => 'World Wide Web Corporation ',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question11->id,
            'answer' => 'World Wide Web Company',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question11->id,
            'answer' => 'World Wide Web Controlling',
            'correct' => 0
        ]);

        $question12 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'What is the correct HTML tag for adding a background color?',
        ]);
        Answer::create([
            'question_id' => $question12->id,
            'answer' => '< body background=”yellow”>',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question12->id,
            'answer' => '< background>yellow< backgound>',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question12->id,
            'answer' => '< bold style=”background-color:white”>',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question12->id,
            'answer' => 'None of these',
            'correct' => 0
        ]);

        $question13 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'Attributes consist of a name and a value separated by ___ sign',
        ]);
        Answer::create([
            'question_id' => $question13->id,
            'answer' => '” ”',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question13->id,
            'answer' => ',',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question13->id,
            'answer' => '=',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question13->id,
            'answer' => ';',
            'correct' => 0
        ]);

        $question14 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'Is it possible to use HTML 5 for the mobile application?',
        ]);
        Answer::create([
            'question_id' => $question14->id,
            'answer' => 'No',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question14->id,
            'answer' => 'Yes',
            'correct' => 1
        ]);

        $question15 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => 'Which attribute will play the audio embed in the audio element continuously?',
        ]);
        Answer::create([
            'question_id' => $question15->id,
            'answer' => 'preload',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question15->id,
            'answer' => 'control',
            'correct' => 0
        ]);
        Answer::create([
            'question_id' => $question15->id,
            'answer' => 'loop',
            'correct' => 1
        ]);
        Answer::create([
            'question_id' => $question15->id,
            'answer' => 'autoplay',
            'correct' => 0
        ]);

        
    }
}
