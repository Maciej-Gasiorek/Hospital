<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table zamiast create bo chcemy dodac kilka tabel
        Schema::table('users', function(Blueprint $table){
            $table->string('phone');
            $table->string('address');
            $table->string('status');
            $table->string('pesel');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('status');
            $table->dropColumn('pesel');
            $table->dropColumn('type');
        });
    }
}
