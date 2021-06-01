<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('action_id')
                ->constrained('actions')
                ->cascadeOnDelete();
            $table->foreignId('plant_id')
                ->constrained('plants')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('plants_actions');
    }
}
