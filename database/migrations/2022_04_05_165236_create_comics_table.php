<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            
            $table->id();

            $table->string('title',150);
            $table->text('description');
            $table->string('thumb',255);
            $table->decimal('price',4,2);
            $table->string('series', 100);
            $table->date('sale_date');
            $table->string('type',35);
            
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
        Schema::dropIfExists('comics');
    }
}