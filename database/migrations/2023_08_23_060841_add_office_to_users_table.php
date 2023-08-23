<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfficeToUsersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'office')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('office')->nullable()->after('province'); // Change 'province' to the appropriate column name
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'office')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('office');
            });
        }
    }
}