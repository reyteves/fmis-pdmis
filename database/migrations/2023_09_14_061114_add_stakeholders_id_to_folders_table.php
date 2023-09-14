<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStakeholdersIdToFoldersTable extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->unsignedInteger('stakeholders_id')->nullable();
            $table->foreign('stakeholders_id')->references('id')->on('stakeholders')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropForeign(['stakeholders_id']);
            $table->dropColumn('stakeholders_id');
        });
    }
}
