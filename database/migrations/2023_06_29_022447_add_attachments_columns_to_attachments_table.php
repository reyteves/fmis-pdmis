<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            // Add other columns specific to the attachments table
            $table->timestamps();
        });

        Schema::table('attachments', function (Blueprint $table) {
            if (!Schema::hasColumn('attachments', 'ppmp')) {
                $table->string('ppmp')->nullable();
            }
            if (!Schema::hasColumn('attachments', 'implementation_plan')) {
                $table->string('implementation_plan')->nullable();
            }
            if (!Schema::hasColumn('attachments', 'summary_of_expenditures')) {
                $table->string('summary_of_expenditures')->nullable();
            }
            if (!Schema::hasColumn('attachments', 'list_of_beneficiaries')) {
                $table->string('list_of_beneficiaries')->nullable();
            }
            if (!Schema::hasColumn('attachments', 'other_attachments')) {
                $table->string('other_attachments')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('attachments', function (Blueprint $table) {
            $table->dropColumn('ppmp');
            $table->dropColumn('implementation_plan');
            $table->dropColumn('summary_of_expenditures');
            $table->dropColumn('list_of_beneficiaries');
            $table->dropColumn('other_attachments');
        });

        Schema::dropIfExists('attachments');
    }
};
