<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1587894973PatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            if(Schema::hasColumn('patients', 'name')) {
                $table->dropColumn('name');
            }
            
        });
Schema::table('patients', function (Blueprint $table) {
            
if (!Schema::hasColumn('patients', 'first_name')) {
                $table->string('first_name')->nullable();
                }
if (!Schema::hasColumn('patients', 'last_name')) {
                $table->string('last_name')->nullable();
                }
if (!Schema::hasColumn('patients', 'address')) {
                $table->string('address')->nullable();
                }
if (!Schema::hasColumn('patients', 'state')) {
                $table->string('state')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('address');
            $table->dropColumn('state');
            
        });
Schema::table('patients', function (Blueprint $table) {
                        $table->string('name')->nullable();
                
        });

    }
}
