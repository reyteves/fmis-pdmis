<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfficeEvaluatorToEvaluationsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('evaluations', 'office_evaluator')) {
            Schema::table('evaluations', function (Blueprint $table) {
                $table->string('office_evaluator')->nullable()->after('bureau_director_name'); // Change 'other_column' to the appropriate column name
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('evaluations', 'office_evaluator')) {
            Schema::table('evaluations', function (Blueprint $table) {
                $table->dropColumn('office_evaluator');
            });
        }
    }
}

