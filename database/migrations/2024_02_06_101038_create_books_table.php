<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titre');
            $table->string('auteur');
            $table->string('editeur');
            $table->string('image');
            $table->string('description');
            $table->integer('quantite');
            $table->integer('reservedQte');
            $table->foreignId('bibliothecaireFK')->constrained('users', 'id');
            $table->foreignId('categorieFK')->constrained('categories', 'id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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
