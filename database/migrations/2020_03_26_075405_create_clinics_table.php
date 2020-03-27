<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('work_from')->default('8:00');
            $table->string('work_to')->default('17:00');
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('distance')->nullable();
            $table->string('email')->nullable();
            $table->float('rating', 1, 1)->nullable();
            $table->text('preview_text')->nullable();
            $table->string('preview_picture')->nullable();
            $table->string('official_name')->nullable();
            $table->string('supervisor')->nullable();
            $table->string('foundation_year')->nullable();
            $table->text('detail_text')->nullable();
            $table->string('map_coordinates')->nullable();
            $table->tinyInteger('specialists')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->foreignId('metro_id')->constrained();
            $table->foreignId('price_type_id')->constrained();
            $table->foreignId('region_id')->constrained();
            $table->index(['metro_id','price_type_id','region_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinics');
    }
}
