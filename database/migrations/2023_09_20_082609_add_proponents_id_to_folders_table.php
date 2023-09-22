<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProponentsIdToFoldersTable extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->unsignedInteger('proponents_id')->nullable();
            $table->foreign('proponents_id')->references('id')->on('proponents')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropForeign(['proponents_id']);
            $table->dropColumn('proponents_id');
        });
    }
};