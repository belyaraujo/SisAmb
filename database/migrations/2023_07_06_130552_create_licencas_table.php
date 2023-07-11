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
        Schema::create('licencas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_ra')->constrained('regiao_administrativa');
            $table->foreignId('id_empreendimento')->constrained('tipo_empreendimento');
            $table->foreignId('id_tipo')->constrained('tipo');
            $table->foreignId('id_situacao')->constrained('situacao');
            $table->foreignId('id_bacia')->constrained('bacia_hidrografica');
            

            $table->string('empreendimento');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longetude', 11, 8);
            $table->string('num_processo');
            $table->date('data_concessao');
            $table->date('data_vencimento');
            $table->integer('validade');
            $table->boolean('vigencia');
            $table->date('prazo_renovacao');
            $table->string('observacao');
            $table->string('interessado');
            $table->integer('doc_sei');
            $table->string('processo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licencas');
    }
};
