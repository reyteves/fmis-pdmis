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
        Schema::create('proponents', function (Blueprint $table) {
            $table->id();
            $table->string('proponent_name')->nullable();
            $table->string('proponent_office')->nullable();
            $table->string('proponent_address')->nullable();
            $table->string('proponent_number')->nullable();
            $table->string('proponent_name2')->nullable();
            $table->string('proponent_office2')->nullable();
            $table->string('proponent_address2')->nullable();
            $table->string('proponent_number2')->nullable();
            $table->string('proponent_name3')->nullable();
            $table->string('proponent_office3')->nullable();
            $table->string('proponent_address3')->nullable();
            $table->string('proponent_number3')->nullable();
            $table->string('proponent_name4')->nullable();
            $table->string('proponent_office4')->nullable();
            $table->string('proponent_address4')->nullable();
            $table->string('proponent_number4')->nullable();
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
        Schema::dropIfExists('proponents');
    }
};
