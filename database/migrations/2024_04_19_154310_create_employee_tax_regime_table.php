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
        Schema::create('employee_tax_regime', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->comment('Id empleado');
            $table->foreignId('tax_regime_id')->constrained()->comment('Id regimen fiscal');
            $table->date('star_date')->comment('Fecha de inicio');
            $table->date('end_date')->comment('Fecha de fin');
            $table->boolean('status')->comment('Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_tax_regime');
    }
};