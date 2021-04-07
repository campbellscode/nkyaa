<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyReflectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_reflections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->default(date("Y-m-d H:i:s"));
            $table->string('title');
            $table->text('quote');
            $table->text('reading');
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
        Schema::dropIfExists('daily_reflections');
    }
}
