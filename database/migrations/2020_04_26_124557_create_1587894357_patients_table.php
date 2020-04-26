<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1587894357PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('patients')) {
            Schema::create('patients', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();

                $table->string('email')->nullable();
                $table->string('mobile')->nullable();
                $table->string('address')->nullable();
                $table->string('state')->nullable();
                $table->string('pin')->nullable();

                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
