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
        Schema::create('konsumens', function (Blueprint $table) {
            $table->id();
            $table->string("nama_konsumen");
            $table->string("email");
            $table->integer("no_hp");
            $table->string("jenis_kelamin");
            $table->string("alamat");
            $table->string("foto");
            $table->string("user_id");
            $table->string("created_by");
            $table->string("updated_by");
            $table->string("deleted_by");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumens');
    }
};
