<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('students_id')->unsigned();
            $table->bigInteger('books_id')->unsigned();
            $table->date('date_borrowed');
            $table->date('date_returned');
            $table->timestamps();

            $table->foreign('students_id')->references('id')->on('students')->onDelete("CASCADE");
            $table->foreign('books_id')->references('id')->on('books')->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
