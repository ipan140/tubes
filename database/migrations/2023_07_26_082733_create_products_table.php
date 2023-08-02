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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('original_filename');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('produk_deskripsi');
            $table->string('encrypted_filename');
            $table->string('product_price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('product_deskripsi');
            $table->dropColumn('original_filename');
        });
    }

};
