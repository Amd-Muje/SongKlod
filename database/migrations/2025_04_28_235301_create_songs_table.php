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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('artist_name');
            $table->string('title');
            $table->string('audio_file');
            $table->foreignId('album_id')->nullable()->constrained('albums','id','song_album_id')->onDelete('restrict');
            $table->foreignId('genre_id')->constrained('genres','id','song_genre_id')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
