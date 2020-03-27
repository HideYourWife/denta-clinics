<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('preview_picture')->nullable();
            $table->string('detail_picture')->nullable();
            $table->text('preview_text')->nullable();
            $table->text('text_1')->nullable();
            $table->text('text_2')->nullable();
            $table->boolean('recommended')->default(false);
            $table->timestamps();
            $table->foreignId('news_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
