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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('ip_group_total')->nullable();
            $table->string('ip_group_male')->nullable();
            $table->string('ip_group_female')->nullable();
            $table->string('pwd_total')->nullable();
            $table->string('pwd_male')->nullable();
            $table->string('pwd_female')->nullable();
            $table->string('children_total')->nullable();
            $table->string('children_male')->nullable();
            $table->string('children_female')->nullable();
            $table->string('youth_total')->nullable();
            $table->string('youth_male')->nullable();
            $table->string('youth_female')->nullable();
            $table->string('adult_total')->nullable();
            $table->string('adult_male')->nullable();
            $table->string('adult_female')->nullable();
            $table->string('older_total')->nullable();
            $table->string('older_male')->nullable();
            $table->string('older_female')->nullable();
            $table->unsignedBigInteger('folder_id')->nullable();
            $table->timestamps();

            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaries');
    }
};
