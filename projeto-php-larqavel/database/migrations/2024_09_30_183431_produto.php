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
        if (!Schema::hasTable('produto')) {
            Schema::create('produto', function (Blueprint $table) {
                $table->id();
                $table->string('descricao', 255);
                $table->enum('categoria', ['ALIMENTACAO', 'BEBIDAS', 'HIGIENE', 'LIMPEZA', 'OUTROS'])->default('OUTROS');
                $table->integer('quantidade')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'produto');
    }
};
