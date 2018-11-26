<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_authors', function (Blueprint $table) {
            $table->integer('book_id')->unsigned()->nullable();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');

            $table->index(['author_id','book_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_authors');
    }
}
