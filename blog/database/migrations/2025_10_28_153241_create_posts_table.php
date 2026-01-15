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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            //$table->bigInteger('id')->autoIncrement()->unsigned();
            //$table->bigIncrements('id');
            $table->string('title', 120);
            $table->string('slug')->unique();
            $table->longText('content');
            $table->timestamps();

            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //forma rapida foreign key
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            //$table->primary(['id', 'slug']); llave primaria compuesta

            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            //$table->index('title'); // índice simple
            //$table->fullText('content'); // índice de texto completo
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
