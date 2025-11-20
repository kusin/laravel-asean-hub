<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_voters', function (Blueprint $table) {
            $table->id('id_voters');
            $table->string('ip_address')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('voters_name')->nullable();
            $table->string('voters_job')->nullable();
            $table->string('voters_email')->nullable();
            $table->string('voters_password')->nullable();
            $table->string('status_data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_voters');
    }
};
