<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_urban_design', function (Blueprint $table) {

            // pk + fk dengan casecade ...
            $table->id('id_urban_design');
            $table->unsignedBigInteger('id_participants');
            $table->foreign('id_participants')->references('id_participants')->on('tb_participants');

            // kolom-kolom tb_urban_design
            $table->string('design_title')->nullable();
            $table->text('design_description')->nullable();
            $table->string('design_presentation')->nullable();
            $table->string('images_1')->nullable();
            $table->string('images_2')->nullable();
            $table->string('images_3')->nullable();
            $table->string('video_native')->nullable();
            $table->string('video_youtube')->nullable();
            $table->string('noted_best_5')->nullable();
            $table->string('noted_best_10')->nullable();
            $table->string('status_data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_urban_design');
    }
};
