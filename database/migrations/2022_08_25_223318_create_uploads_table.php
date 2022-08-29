<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('course_tittle');
            $table->string('course_code');
            $table->string('report_item');
            $table->string('topic_name');
            $table->string('std_name');
            $table->integer('id_no');
            $table->string('session');
            $table->string('std_dept');
            $table->string('teacher_name');
            $table->string('designation');
            $table->string('teacher_dept');
            $table->string('sub_time');
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
        Schema::dropIfExists('uploads');
    }
};
