<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifySignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signatures', function (Blueprint $table) {
            if (!Schema::hasColumn('signatures', 'prepared_by_checkbox') ||
                Schema::getColumnType('signatures', 'prepared_by_checkbox') == 'boolean') {
                $table->string('prepared_by_checkbox')->nullable()->change();
            }

            if (!Schema::hasColumn('signatures', 'evaluated_by_checkbox') ||
                Schema::getColumnType('signatures', 'evaluated_by_checkbox') == 'boolean') {
                $table->string('evaluated_by_checkbox')->nullable()->change();
            }

            if (!Schema::hasColumn('signatures', 'confirmed_by_checkbox') ||
                Schema::getColumnType('signatures', 'confirmed_by_checkbox') == 'boolean') {
                $table->string('confirmed_by_checkbox')->nullable()->change();
            }

            if (!Schema::hasColumn('signatures', 'validated_by_checkbox') ||
                Schema::getColumnType('signatures', 'validated_by_checkbox') == 'boolean') {
                $table->string('validated_by_checkbox')->nullable()->change();
            }

            if (!Schema::hasColumn('signatures', 'endorsed_by_checkbox') ||
                Schema::getColumnType('signatures', 'endorsed_by_checkbox') == 'boolean') {
                $table->string('endorsed_by_checkbox')->nullable()->change();
            }

            if (!Schema::hasColumn('signatures', 'recommended_by_checkbox') ||
                Schema::getColumnType('signatures', 'recommended_by_checkbox') == 'boolean') {
                $table->string('recommended_by_checkbox')->nullable()->change();
            }

            if (!Schema::hasColumn('signatures', 'approved_by_checkbox') ||
                Schema::getColumnType('signatures', 'approved_by_checkbox') == 'boolean') {
                $table->string('approved_by_checkbox')->nullable()->change();
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
        if (Schema::hasColumn('signatures', 'prepared_by_checkbox') &&
            Schema::getColumnType('signatures', 'prepared_by_checkbox') == 'string') {
            $table->boolean('prepared_by_checkbox')->nullable(false)->change();
        }

        if (Schema::hasColumn('signatures', 'evaluated_by_checkbox') &&
            Schema::getColumnType('signatures', 'evaluated_by_checkbox') == 'string') {
            $table->boolean('evaluated_by_checkbox')->nullable(false)->change();
        }

        if (Schema::hasColumn('signatures', 'confirmed_by_checkbox') &&
            Schema::getColumnType('signatures', 'confirmed_by_checkbox') == 'string') {
            $table->boolean('confirmed_by_checkbox')->nullable(false)->change();
        }

        if (Schema::hasColumn('signatures', 'validated_by_checkbox') &&
            Schema::getColumnType('signatures', 'validated_by_checkbox') == 'string') {
            $table->boolean('validated_by_checkbox')->nullable(false)->change();
        }

        if (Schema::hasColumn('signatures', 'endorsed_by_checkbox') &&
            Schema::getColumnType('signatures', 'endorsed_by_checkbox') == 'string') {
            $table->boolean('endorsed_by_checkbox')->nullable(false)->change();
        }

        if (Schema::hasColumn('signatures', 'recommended_by_checkbox') &&
            Schema::getColumnType('signatures', 'recommended_by_checkbox') == 'string') {
            $table->boolean('recommended_by_checkbox')->nullable(false)->change();
        }

        if (Schema::hasColumn('signatures', 'approved_by_checkbox') &&
            Schema::getColumnType('signatures', 'approved_by_checkbox') == 'string') {
            $table->boolean('approved_by_checkbox')->nullable(false)->change();
        }
    });
}
}