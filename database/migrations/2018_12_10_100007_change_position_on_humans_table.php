<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePositionOnHumansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('humans', function (Blueprint $table) {
            $table->dropColumn('position');
            $table->unsignedInteger('position_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('humans', function (Blueprint $table) {
            $table->dropColumn('position_id');
            $table->string('position')->nullable();
        });
    }
}
