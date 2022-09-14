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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('course_type_id');
            $table->unsignedBigInteger('course_category_id');
            $table->unsignedBigInteger('year_id');
            $table->foreign('course_type_id')->references('id')->on('course_types');
            $table->foreign('course_category_id')->references('id')->on('course_categories');
            $table->foreign('year_id')->references('id')->on('years');
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
        Schema::dropIfExists('courses');
    }
};
