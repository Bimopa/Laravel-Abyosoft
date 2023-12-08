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
        Schema::create('tbl_hutang', function (Blueprint $table) {
            $table->id();
            $table->char('notransaksi', 10);
            $table->char('kodespl', 10);
            $table->datetime('tglbeli', $precision = 0);
            $table->integer('totalhutang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tbl_hutang');
        
    }
};

