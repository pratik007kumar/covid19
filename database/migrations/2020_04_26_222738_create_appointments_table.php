<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('doctor_user_id')->unsigned()->nullable();
            $table->foreign('doctor_user_id', '47199_5ea5579a3887a')->references('id')->on('users')->onDelete('cascade');

            $table->integer('patient_user_id')->unsigned()->nullable();
            $table->foreign('patient_user_id', '47199_5ea5579p3888a')->references('id')->on('users')->onDelete('cascade');

            $table->text('title')->nullable();

            $table->dateTime('event_start_dt')->nullable();
            $table->dateTime('event_end_dt')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
