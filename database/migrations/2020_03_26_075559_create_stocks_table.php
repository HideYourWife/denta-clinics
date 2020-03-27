<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('preview_picture')->nullable();
            $table->string('preview_text')->nullable();
            $table->date('active_from');
            $table->date('active_to');
            $table->tinyInteger('stock_percent')->unsigned()->nullable();
            $table->boolean('active')->default(true);
            $table->string('ad_picture')->nullable();
            $table->boolean('show_in_ad')->default(false);
            $table->timestamps();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('clinic_id')->constrained();
            $table->foreignId('region_id')->constrained();
            $table->index('region_id');
            $table->index('clinic_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
