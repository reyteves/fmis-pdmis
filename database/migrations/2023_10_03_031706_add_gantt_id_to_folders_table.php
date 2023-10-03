<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGanttIdToFoldersTable extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->unsignedBigInteger('gantt_id')->nullable();
            $table->foreign('gantt_id')->references('id')->on('gantt')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropForeign(['gantt_id']);
            $table->dropColumn('gantt_id');
        });
    }
}


