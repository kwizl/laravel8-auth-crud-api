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
        // Drop table
        Schema::dropIfExists('book_authors');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Create table
        Schema::create('book_authors', function(Blueprint $table) {
            $table->increments('id');

            // other columns
            $table->timestamps();
        });
    }
};
