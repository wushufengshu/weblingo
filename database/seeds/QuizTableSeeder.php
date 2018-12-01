<?php

use Illuminate\Database\Seeder;
use App\Quiz;
use App\Question;
use App\Answer;

class QuizTableSeeder extends Seeder
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
        	'name' => $faker->title,
        	'slug' => $faker->title
        ]); 
        $question1 = Question::create([
            'course_id'=>1,
            'quiz_id' => $quiz1->id,
            'body' => $faker->sentence,
        ]);
        $answer1 = Answer::create([
        	'question_id' => $question1->id,
            'answer' => $faker->word,
            'correct' => 0
        ]);
        $answer2 = Answer::create([
        	'question_id' => $question1->id,
            'answer' => $faker->word,
            'correct' => 1
        ]);
        $answer3 = Answer::create([
        	'question_id' => $question1->id,
            'answer' => $faker->word,
            'correct' => 0
        ]);
        $answer4 = Answer::create([
        	'question_id' => $question1->id,
            'answer' => $faker->word,
            'correct' => 0
        ]);

        
    }
}
