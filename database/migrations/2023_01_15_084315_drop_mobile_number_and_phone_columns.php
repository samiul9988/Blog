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

        if (Schema::hasColumn('members', 'mobile-number')) {

            Schema::table('members', function (Blueprint $table) {
                $table->dropColumn('mobile-number');
            });
        }

        if (Schema::hasColumn('members', 'phone')) {
            Schema::table('members', function (Blueprint $table) {
                $table->dropColumn('phone');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('mobile-number');
            $table->string('phone');
        });
    }
};
