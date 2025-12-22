<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('info_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->text('tentang_perusahaan');
            $table->text('visi_perusahaan');
            $table->text('misi_perusahaan');
            $table->text('alamat_perusahaan');
            $table->string('email_perusahaan');
            $table->string('telepon_perusahaan')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_perusahaans');
    }
};
