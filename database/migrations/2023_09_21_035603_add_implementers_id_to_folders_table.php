<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImplementersIdToFoldersTable extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->unsignedBigInteger('implementers_id')->nullable();
            $table->foreign('implementers_id')->references('id')->on('implementers')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropForeign(['implementers_id']);
            $table->dropColumn('implementers_id');
        });
    }
}
