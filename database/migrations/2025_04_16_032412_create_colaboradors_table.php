<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('colaboradors', function (Blueprint $table) {
        $table->id();
        $table->string('nome_completo');
        $table->string('setor');
        $table->string('cidade');
        $table->date('checkin');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('colaboradors');
    }
};
