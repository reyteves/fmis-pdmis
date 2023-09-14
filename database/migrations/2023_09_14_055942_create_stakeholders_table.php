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
        Schema::create('stakeholders', function (Blueprint $table) {
            $table->id();
            $table->string('stakeholder_name')->nullable();
            $table->string('stakeholder_office')->nullable();
            $table->string('stakeholder_address')->nullable();
            $table->string('stakeholder_number')->nullable();
            $table->string('stakeholder_name2')->nullable();
            $table->string('stakeholder_office2')->nullable();
            $table->string('stakeholder_address2')->nullable();
            $table->string('stakeholder_number2')->nullable();
            $table->string('stakeholder_name3')->nullable();
            $table->string('stakeholder_office3')->nullable();
            $table->string('stakeholder_address3')->nullable();
            $table->string('stakeholder_number3')->nullable();
            $table->string('stakeholder_name4')->nullable();
            $table->string('stakeholder_office4')->nullable();
            $table->string('stakeholder_address4')->nullable();
            $table->string('stakeholder_number4')->nullable();
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
        Schema::dropIfExists('stakeholders');
    }
};
