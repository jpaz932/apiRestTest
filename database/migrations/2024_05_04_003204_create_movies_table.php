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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('genre', ['Action', 'Comedy', 'Drama', 'Horror', 'Science Fiction']);
            $table->date('release_date');
            $table->float('rating', 3, 1)->default(0);
            $table->integer('duration')->unsigned();
            $table->boolean('is_featured')->default(false);
            $table->decimal('price', 8, 2)->nullable();
            $table->string('director')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
