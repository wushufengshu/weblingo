<?php

use Illuminate\Database\Seeder;
use App\Quiz;
use App\Question;
use App\Answer;

class JavascriptQuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

		$quiz1 = Quiz::create([
			'admin_id' => 2,
			'name' => 'Java Script Quiz',
			'slug' => 'javascript_quiz',
            'limit' => 15
		]); 


		$question1 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Which of the following is a server-side Java Script object?',
		]);
		Answer::create([
			'question_id' => $question1->id,
		    'answer' => 'Function',
		    'correct' => 0
		]);
		Answer::create([
			'question_id' => $question1->id,
		    'answer' => 'File',
		    'correct' => 1
		]);
		Answer::create([
			'question_id' => $question1->id,
		    'answer' => 'FileUpload',
		    'correct' => 0
		]);
		Answer::create([
			'question_id' => $question1->id,
		    'answer' => 'Date',
		    'correct' => 0
		]);

		$question2 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Java script can be used for Storing the form\'s contents to a database file on the server',
		]);
		Answer::create([
		    'question_id' => $question2->id,
		    'answer' => 'False',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question2->id,
		    'answer' => 'True',
		    'correct' => 0
		]);
		
		$question3 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'To insert a JavaScript into an HTML page, which tag is used?',
		]);
		Answer::create([
			'question_id' => $question3->id,
		    'answer' => '< script=’java’>',
		    'correct' => 0
		]);
		Answer::create([
			'question_id' => $question3->id,
		    'answer' => '< javascript>',
		    'correct' => 0
		]);
		Answer::create([
			'question_id' => $question3->id,
		    'answer' => '< script>',
		    'correct' => 1
		]);
		Answer::create([
			'question_id' => $question3->id,
		    'answer' => '< js>',
		    'correct' => 1
		]);

		
		$question4 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Which of the below is used in Java script to insert special characters?',
		]);
		Answer::create([
		    'question_id' => $question4->id,
		    'answer' => '&',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question4->id,
		    'answer' => '\ ',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question4->id,
		    'answer' => '-',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question4->id,
		    'answer' => '%',
		    'correct' => 0
		]);
		
		$question5 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'C-style block-level scoping is not supported in Java script',
		]);
		Answer::create([
		    'question_id' => $question5->id,
		    'answer' => 'False',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question5->id,
		    'answer' => 'True',
		    'correct' => 1
		]);
		
		$question6 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'JavaScript ignores extra spaces',
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => 'True',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => 'False',
		    'correct' => 1
		]);
		
		$question7 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Which of the following is correct to write “Hello World” on the web page?',
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'System.out.println(“Hello World”)',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'print(“Hello World”)',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'document.write(“Hello World”)',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'response.write(“Hello World”)',
		    'correct' => 0
		]);
		
		$question8 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Which of the following is the tainted property of a window object in Java Script?',
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => 'Pathname',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => 'Protocol',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => 'Defaultstatus',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => 'Host',
		    'correct' => 0
		]);
		
		$question9 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Which of the following is used to capture all click events in a window?',
		]);
		Answer::create([
		    'question_id' => $question9->id,
		    'answer' => 'window.captureEvents(Event.CLICK);',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question9->id,
		    'answer' => 'window.routeEvents(Event.CLICK );',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question9->id,
		    'answer' => 'window.handleEvents (Event.CLICK);',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question9->id,
		    'answer' => 'window.raiseEvents(Event.CLICK );',
		    'correct' => 0
		]);
		
		$question10 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Javascript is an object oriented language?',
		]);
		Answer::create([
		    'question_id' => $question10->id,
		    'answer' => 'False',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question10->id,
		    'answer' => 'True',
		    'correct' => 1
		]);
		
		$question11 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'Which of the ways below is incorrect of instantiating a date?',
		]);
		Answer::create([
		    'question_id' => $question11->id,
		    'answer' => 'new Date(dateString)',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question11->id,
		    'answer' => 'new Date()',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question11->id,
		    'answer' => 'new Date(seconds)',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question11->id,
		    'answer' => 'new Date(year, month, day, hours, minutes, seconds, milliseconds)',
		    'correct' => 0
		]);
		
		$question12 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => '___________ JavaScript is also called client-side JavaScript.',
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'Microsoft',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'Navigator',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'LiveWire',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'Native',
		    'correct' => 0
		]);
		
		$question13 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'What language defines the behavior of a web page?',
		]);
		Answer::create([
		    'question_id' => $question13->id,
		    'answer' => 'HTML',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question13->id,
		    'answer' => 'CSS',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question13->id,
		    'answer' => 'XML',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question13->id,
		    'answer' => 'Java Script',
		    'correct' => 1
		]);
		
		$question14 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'File is a server-side JavaScript object?',
		]);
		Answer::create([
		    'question_id' => $question14->id,
		    'answer' => 'True',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question14->id,
		    'answer' => 'False',
		    'correct' => 0
		]);
		
		$question15 = Question::create([
		    'course_id'=>3,
		    'quiz_id' => $quiz1->id,
		    'body' => 'What is the alternate name for Java script?',
		]);
		Answer::create([
		    'question_id' => $question15->id,
		    'answer' => 'LimeScript',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question15->id,
		    'answer' => 'Both a and d',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question15->id,
		    'answer' => 'ECMScript',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question15->id,
		    'answer' => 'ECMAScript',
		    'correct' => 1
		]);
    }
}
