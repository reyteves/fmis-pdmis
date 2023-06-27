<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
class AddColumnsToSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signatures', function (Blueprint $table) {
            if (!Schema::hasColumn('signatures', 'prepared_by_checkbox')) {
                $table->boolean('prepared_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'prepared_by_input')) {
                $table->string('prepared_by_input')->nullable();
            }
            if (!Schema::hasColumn('signatures', 'evaluated_by_checkbox')) {
                $table->boolean('evaluated_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'evaluated_by_input')) {
                $table->string('evaluated_by_input')->nullable();
            }
            if (!Schema::hasColumn('signatures', 'confirmed_by_checkbox')) {
                $table->boolean('confirmed_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'confirmed_by_input')) {
                $table->string('confirmed_by_input')->nullable();
            }
            if (!Schema::hasColumn('signatures', 'validated_by_checkbox')) {
                $table->boolean('validated_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'validated_by_input')) {
                $table->string('validated_by_input')->nullable();
            }
            if (!Schema::hasColumn('signatures', 'endorsed_by_checkbox')) {
                $table->boolean('endorsed_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'endorsed_by_input')) {
                $table->string('endorsed_by_input')->nullable();
            }
            if (!Schema::hasColumn('signatures', 'recommended_by_checkbox')) {
                $table->boolean('recommended_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'recommended_by_input')) {
                $table->string('recommended_by_input')->nullable();
            }
            if (!Schema::hasColumn('signatures', 'approved_by_checkbox')) {
                $table->boolean('approved_by_checkbox')->default(false);
            }
            if (!Schema::hasColumn('signatures', 'approved_by_input')) {
                $table->string('approved_by_input')->nullable();
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
        Schema::table('signatures', function (Blueprint $table) {
            $table->dropColumn([
                'prepared_by_checkbox',
                'prepared_by_input',
                'evaluated_by_checkbox',
                'evaluated_by_input',
                'confirmed_by_checkbox',
                'confirmed_by_input',
                'validated_by_checkbox',
                'validated_by_input',
                'endorsed_by_checkbox',
                'endorsed_by_input',
                'recommended_by_checkbox',
                'recommended_by_input',
                'approved_by_checkbox',
                'approved_by_input',
            ]);
        });
    }
}







