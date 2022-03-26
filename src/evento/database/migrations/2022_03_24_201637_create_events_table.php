<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
            ->unsigned()
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->foreignId('user_id')
            ->unsigned()
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            
            $table->string('name');
            $table->string('description');
            $table->string('speaker');
            $table->string('city');
            $table->string('location');
            $table->date('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('seats');
            $table->string('price');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->text('image1');
            $table->text('image2');
            $table->text('image3');
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
        Schema::dropIfExists('events');
    }
}
