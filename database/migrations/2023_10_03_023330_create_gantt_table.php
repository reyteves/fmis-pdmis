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
        Schema::create('gantts', function (Blueprint $table) {
            $table->id();
            $table->string('gantt_project_name');

            for ($i = 1; $i <= 7; $i++) {
                $table->string("task_{$i}");
                $table->date("task_{$i}_start_date");
                $table->date("task_{$i}_end_date");
            }

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gantt');
    }
};
