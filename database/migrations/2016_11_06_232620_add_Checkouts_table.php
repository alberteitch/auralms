<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           DB::table('checkouts')->insert(array(
          
            "book" => 2,
            "user" => 1,
            "checked_out" => date("Y-m-d H:m:s"),
            "returned" => date("Y-m-d H:m:s"),
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
        DB::table('checkouts')->where('id','=','%') -> delete();
    }
}
