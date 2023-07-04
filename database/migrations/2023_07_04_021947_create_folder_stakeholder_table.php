<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolderStakeholderTable extends Migration
{
    public function up()
    {
        Schema::create('folder_stakeholder', function (Blueprint $table) {
            $table->unsignedInteger('folder_id');
            $table->unsignedInteger('stakeholder_id');
            $table->timestamps();

            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');
            $table->foreign('stakeholder_id')->references('id')->on('stakeholders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('folder_stakeholder');
    }
}