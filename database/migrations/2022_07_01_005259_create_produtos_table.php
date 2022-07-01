<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('gender');
            $table->text('developer');
            $table->text('distributor');
            $table->text('launch');
            $table->text('so');
            $table->text('processor');
            $table->integer('memory_ram');
            $table->integer('storage_req');
            $table->text('video_card');
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
        Schema::dropIfExists('produtos');
    }
};
