<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBeneficiariesIdToFoldersTable extends Migration
{
    public function up()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->unsignedInteger('beneficiaries_id')->nullable();
            $table->foreign('beneficiaries_id')->references('id')->on('beneficiaries')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('folders', function (Blueprint $table) {
            $table->dropForeign(['beneficiaries_id']);
            $table->dropColumn('beneficiaries_id');
        });
    }
}
