<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->default(1)
                ->constrained('categories')
                ->cascadeOnDelete();
            $table->string("name")->default('Растение без имени');
            $table->string("short_info")->default('Краткая информация');
            $table->string("full_info")->default('Подробная информация');
            $table->integer('watering_days');
            $table->integer('manuring_days');
            $table->integer('pest_control_days');
            $table->string("photo_small_path")->default('1.jpg');
            $table->string("photo_big_path")->default('1.jpg');
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
        Schema::dropIfExists('plants');
    }
}
