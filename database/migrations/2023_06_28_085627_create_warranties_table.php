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
            $table->foreignid('type')->nullable()->constrained('warranty_types')->nullOnDelete();
            $table->bigInteger('length')->nullable();
            $table->string('serial_number',255)->unique();
            $table->foreignId('status')->nullable()->constrained('status')->nullOnDelete();
            $table->dateTime('expire_time');
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
        Schema::dropIfExists('warranties');
    }
};
