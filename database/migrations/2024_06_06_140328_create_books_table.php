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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_user")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->string("autor");
            $table->string("titulo");
            $table->string("subtitulo");
            $table->string("edicao");
            $table->string("editora");
            $table->integer("ano_de_publicacao");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
