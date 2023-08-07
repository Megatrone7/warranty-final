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
        Schema::disableForeignKeyConstraints();

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('product_categories');
            $table->unsignedBigInteger('warranty_serial')->unique();
            $table->foreign('warranty_serial')->references('serial_number')->on('warranties');
            //$table->unsignedBigInteger('owner_id');
            // $table->foreignId('owner_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreignId('owner_id')->constrained('users')->onDelete('restrict');
            $table->dateTime('sale_date')->nullable()->default(null);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
