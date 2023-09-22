<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplementersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementers', function (Blueprint $table) {
            $table->id();
            $table->string('implementer_name')->nullable();
            $table->string('implementer_office')->nullable();
            $table->string('implementer_address')->nullable();
            $table->string('implementer_number')->nullable();
            $table->string('implementer_name2')->nullable();
            $table->string('implementer_office2')->nullable();
            $table->string('implementer_address2')->nullable();
            $table->string('implementer_number2')->nullable();
            $table->string('implementer_name3')->nullable();
            $table->string('implementer_office3')->nullable();
            $table->string('implementer_address3')->nullable();
            $table->string('implementer_number3')->nullable();
            $table->string('implementer_name4')->nullable();
            $table->string('implementer_office4')->nullable();
            $table->string('implementer_address4')->nullable();
            $table->string('implementer_number4')->nullable();
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
        Schema::dropIfExists('implementers');
    }
}