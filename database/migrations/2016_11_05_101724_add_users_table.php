<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::table('users')->insert(array(
      
            "name" => "User 1",
            "email" => "no@email.com",
            "contact" => 1234567,
            "address" => "No Address",
            "city" => "No City",
            "zip" => "No Zip",
            "country" => "No Country",
            "password" => "12345",
            "admin" => true,

            "dob" => "1980-07-08 00:00:00",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));

            DB::table('users')->insert(array(
     
            "name" => "User 2",
            "email" => "no2@email.com",
            "contact" => 1234567,
            "address" => "No Address",
            "city" => "No City",
            "zip" => "No Zip",
            "country" => "No Country",
            "password" => "12345",
            "admin" => false,

            "dob" => "1980-07-08 00:00:00",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));

            DB::table('users')->insert(array(
          
            "name" => "Albert",
            "email" => "Ahufana@email.com",
            "contact" => 1234567,
            "address" => "No Address",
            "city" => "No City",
            "zip" => "No Zip",
            "country" => "No Country",
            "password" => "12345",
            "admin" => false,

            "dob" => "1980-07-08 00:00:00",
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
        DB::table('users')->where('id','=','%') -> delete();
    }
}
