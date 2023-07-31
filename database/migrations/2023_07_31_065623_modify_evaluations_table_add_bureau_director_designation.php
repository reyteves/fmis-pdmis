<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEvaluationsTableAddBureauDirectorDesignation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Rename the existing column to 'bureau_director_designation'
        Schema::table('evaluations', function (Blueprint $table) {
            $table->renameColumn('bureau_director', 'bureau_director_designation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // If you need to rollback, you can reverse the rename operation in the down method.
        Schema::table('evaluations', function (Blueprint $table) {
            $table->renameColumn('bureau_director_designation', 'bureau_director');
        });
    }
}