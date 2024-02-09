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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('post_id')->constrained(
                table: 'posts', indexName: 'comentarios_post_id'
            )->onDelete('cascade');;
            $table->foreignId('usuario_id')->constrained(
                table: 'usuarios', indexName: 'comentarios_user_id'
            )->onDelete('cascade');;
            $table->text('contenido');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
