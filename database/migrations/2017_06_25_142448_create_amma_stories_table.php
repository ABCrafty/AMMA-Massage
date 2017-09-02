<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmmaStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amma_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('intro');
            $table->text('content');
            $table->text('conclusion');
            $table->string('image');
            $table->string('pdf');
            $table->text('video_link');
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
        Schema::dropIfExists('amma_stories');
    }
}
