<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('settings')->insert(array(
            "threshold" => 14,
            "penalty" => 2,
            "sr" => 6,
            "jr" => 3,
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('settings')->where('id','=','%') -> delete();
    }
}
