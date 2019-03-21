<?php

use Illuminate\Database\Seeder;
use App\Quiz;
use App\Question;
use App\Answer;

class CssQuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

		$quiz2 = Quiz::create([
			'admin_id' => 2,
		    'name' => 'CSS Quiz',
		    'slug' => 'css_quiz',
            'limit' => 15
		]); 

		$question1 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'Which CSS selector we will use if we want to define an element?',
		]);
		Answer::create([
		    'question_id' => $question1->id,
		    'answer' => 'id',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question1->id,
		    'answer' => 'text',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question1->id,
		    'answer' => 'class',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question1->id,
		    'answer' => 'name',
		    'correct' => 0
		]);

		$question2 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'What CSS property we will use of we don’t want a floating div to the left side of the element?',
		]);
		Answer::create([
		    'question_id' => $question2->id,
		    'answer' => 'margin',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question2->id,
		    'answer' => 'clear',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question2->id,
		    'answer' => 'float',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question2->id,
		    'answer' => 'padding',
		    'correct' => 0
		]);

		$question3 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'If we want to wrap a block of text around the image, what property we will use?',
		]);
		Answer::create([
		    'question_id' => $question3->id,
		    'answer' => 'wrap',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question3->id,
		    'answer' => 'push',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question3->id,
		    'answer' => 'float',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question3->id,
		    'answer' => 'align',
		    'correct' => 0
		]);

		$question4 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'We can define the text direction through CSS property. ',
		]);
		Answer::create([
		    'question_id' => $question4->id,
		    'answer' => 'False',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question4->id,
		    'answer' => 'True',
		    'correct' => 1
		]);

		$question5 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'It is not possible to declare font-weight, font-face and font-size with one CSS property. ',
		]);
		Answer::create([
		    'question_id' => $question5->id,
		    'answer' => 'True',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question5->id,
		    'answer' => 'False',
		    'correct' => 1
		]);

		$question6 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'What value we will use if we want an arrow as a cursor?',
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => 'pointer',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => 'default',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => 'arrow',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => 'arr',
		    'correct' => 0
		]);

		$question7 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'What CSS property if we want to display a green dotted border?',
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'border-color',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'border-decoration',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'border-style',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question7->id,
		    'answer' => 'border-line',
		    'correct' => 0
		]);

		$question8 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'Which element is used in <HEAD> section in HTML, if we want to use an external style sheet file to decorate the page?',
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => '<src>',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => '<link>',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => '<style>',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question8->id,
		    'answer' => '<css>',
		    'correct' => 0
		]);

		$question9 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'Class are can be added to may HTML element to identify them as a member of a specific group. ',
		]);
		Answer::create([
		    'question_id' => $question9->id,
		    'answer' => 'False',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question9->id,
		    'answer' => 'True',
		    'correct' => 1
		]);

		$question10 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'When we write <img src=“img.png”> what “img.png” inside double quote implies?',
		]);
		Answer::create([
		    'question_id' => $question10->id,
		    'answer' => 'element',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question10->id,
		    'answer' => 'value',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question10->id,
		    'answer' => 'attribute',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question10->id,
		    'answer' => 'operator',
		    'correct' => 0
		]);

		$question11 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'How to write comment using CSS code?',
		]);
		Answer::create([
		    'question_id' => $question11->id,
		    'answer' => '/* comment */',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question11->id,
		    'answer' => '// comment //',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => '/ comment /',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question6->id,
		    'answer' => '<* comment *>',
		    'correct' => 0
		]);

		$question12 = Question::create([
		    'course_id'=>2,
		    'quiz_id' => $quiz2->id,
		    'body' => 'what CSS property is used for text size of an element?',
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'text-style',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'font-style',
		    'correct' => 0
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'font-size',
		    'correct' => 1
		]);
		Answer::create([
		    'question_id' => $question12->id,
		    'answer' => 'text-size',
		    'correct' => 0
		]);
    }
}

