<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('coursee',function(Blueprint $table){
			$table->increments('id');
			$table->string('course_name',30)->notNull();
			$table->integer('profession_id')->notNull();
			$table->string('cover_img');
			$table->integer('sort')->notNull()->default(0);
			$table->string('description');
			$table->timestamps();
			$table->enum('status',[1,2])->notNull()->default(1);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::dropIfExists('coursee');
    }
}
