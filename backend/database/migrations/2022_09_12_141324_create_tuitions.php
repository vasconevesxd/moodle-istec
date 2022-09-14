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
        Schema::create('tuitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('value');
            $table->dateTime('payment_date');
            $table->string('file');
            $table->unsignedBigInteger('tuition_state_id');
            $table->foreign('tuition_state_id')->references('id')->on('tuition_states');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tuitions');
    }
};
