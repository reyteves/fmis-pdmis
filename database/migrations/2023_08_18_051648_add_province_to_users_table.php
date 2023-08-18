<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProvinceToUsersTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'province')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('province')->nullable()->after('region');
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'province')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('province');
            });
        }
    }
}
