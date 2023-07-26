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
        Schema::table('evaluations', function (Blueprint $table) {
            // Add the new fields as string and nullable
            $table->string('project_title')->nullable();
            $table->string('location')->nullable();
            $table->string('cost_and_source')->nullable();
            $table->string('period_of_implementation')->nullable();
            $table->string('no_of_beneficiaries')->nullable();
            $table->string('synopsis')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            // Drop the added fields if you ever need to rollback
            $table->dropColumn('project_title');
            $table->dropColumn('location');
            $table->dropColumn('cost_and_source');
            $table->dropColumn('period_of_implementation');
            $table->dropColumn('no_of_beneficiaries');
            $table->dropColumn('synopsis');
        });
    }
};
