<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::table('books')->insert(array(
            
            "title" => "Book 1 title",
            "author" => "Author 1",
            "isbn" => 1234568369123,
            "quantities" => "1",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));

            DB::table('books')->insert(array(
            
            "title" => "Book 2 title",
            "author" => "Author 1",
            "isbn" => 2234568369123,
            "quantities" => "1",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));
            DB::table('books')->insert(array(
            
            "title" => "Book 3 title",
            "author" => "Author 1",
            "isbn" => 3234568369123,
            "quantities" => "5",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));
            DB::table('books')->insert(array(
            
            "title" => "Book 4 title",
            "author" => "Author 1",
            "isbn" => 4234568369123,
            "quantities" => "1",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));
            DB::table('books')->insert(array(
            
            "title" => "Book 5 title",
            "author" => "Author 1",
            "isbn" => 5234568369123,
            "quantities" => "11",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));
            DB::table('books')->insert(array(
            
            "title" => "Book 6 title",
            "author" => "Author 1",
            "isbn" => 6234568369123,
            "quantities" => "3",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));
            DB::table('books')->insert(array(
            
            "title" => "Book 7 title",
            "author" => "Author 8",
            "isbn" => 7234568369123,
            "quantities" => "1",
            "shelf_location" => "A24",
            "created_at" => date("Y-m-d H:m:s"),
            "updated_at" => date("Y-m-d H:m:s")
            ));
            DB::table('books')->insert(array(
            
            "title" => "Book 8 title",
            "author" => "Author 1",
            "isbn" => 8234568369123,
            "quantities" => "20",
            "shelf_location" => "A24",
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
        DB::table('books')->where('id','=','%') -> delete();
    }
}
