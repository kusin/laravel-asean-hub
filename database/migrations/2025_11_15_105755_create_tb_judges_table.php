<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_judges', function (Blueprint $table) {
            $table->id('id_judges');
            $table->string('judges_name')->nullable();
            $table->string('origin_institution')->nullable();
            $table->string('judges_photo')->nullable();
            $table->string('judges_email')->nullable();
            $table->string('judges_password')->nullable();
            $table->string('status_data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_judges');
    }
};
