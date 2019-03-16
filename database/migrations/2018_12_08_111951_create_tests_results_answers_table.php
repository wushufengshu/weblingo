<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsResultsAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests_results_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tests_result_id');
            $table->integer('question_id');
            $table->integer('answer_id');
            $table->tinyInteger('correct')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests_results_answers');
    }
}
