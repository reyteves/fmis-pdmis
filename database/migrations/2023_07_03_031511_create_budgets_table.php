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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('project_status')->nullable();
            $table->string('implementation_mode')->nullable();
            $table->string('project_basis')->nullable();
            $table->string('total_project_cost')->nullable();
            $table->string('direct_cost')->nullable();
            $table->string('indirect_cost')->nullable();
            $table->string('source_of_fund')->nullable();
            $table->string('budget_year')->nullable();
            $table->string('core_program')->nullable();
            $table->string('sub_program')->nullable();
            $table->string('target_date_start')->nullable();
            $table->string('target_date_completion')->nullable();
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
        Schema::dropIfExists('budgets');
    }
};
