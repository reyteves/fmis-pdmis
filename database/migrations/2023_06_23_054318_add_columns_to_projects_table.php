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
        if (!Schema::hasColumn('projects', 'name')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->string('name');
            });
        }

        if (!Schema::hasColumn('projects', 'description')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('description')->nullable();
            });
        }

        if (!Schema::hasColumn('projects', 'background_and_rationale')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('background_and_rationale')->nullable();
            });
        }

        if (!Schema::hasColumn('projects', 'objectives')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('objectives')->nullable();
            });
        }

        if (!Schema::hasColumn('projects', 'project_implementation')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('project_implementation')->nullable();
            });
        }

        if (!Schema::hasColumn('projects', 'monitoring_evaluation')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('monitoring_evaluation')->nullable();
            });
        }

        if (!Schema::hasColumn('projects', 'potential_risk')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('potential_risk')->nullable();
            });
        }

        if (!Schema::hasColumn('projects', 'sustainability_plan')) {
            Schema::table('projects', function (Blueprint $table) {
                $table->text('sustainability_plan')->nullable();
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
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['name', 'description', 'background_and_rationale', 'objectives', 'project_implementation', 'monitoring_evaluation', 'potential_risk', 'sustainability_plan']);
        });
    }
};
