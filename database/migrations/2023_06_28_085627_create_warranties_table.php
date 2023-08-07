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

        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('id')->on('warranty_types');
            $table->bigInteger('length');
            $table->unsignedBigInteger('serial_number')->unique();
            $table->unsignedBigInteger('status');
            $table->foreign('status')->references('id')->on('status');
            $table->dateTime('expire_time');
            $table->timestamp('created_at')->useCurrent();
            
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warranties');
    }
};
