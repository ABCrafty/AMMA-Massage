<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phone');
            $table->string('phone_text');
            $table->string('title');
            $table->text('content_title');
            $table->string('title_link');
            $table->string('service_1');
            $table->string('service_2');
            $table->string('service_3');
            $table->string('service_4');
            $table->text('offer_preview');
            $table->string('offer_title_1');
            $table->string('offer_title_2');
            $table->string('offer_title_3');
            $table->text('offer_content_1');
            $table->text('offer_content_2');
            $table->text('offer_content_3');
            $table->string('offer_link_1');
            $table->string('offer_link_2');
            $table->string('offer_link_3');
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
        Schema::dropIfExists('homepage');
    }
}
