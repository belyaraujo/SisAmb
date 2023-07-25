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
            $table->foreignId('id_vigencia')->constrained('vigencia');
            //$table->foreignId('id_bacia')->constrained('bacia_hidrografica');
           


            $table->longtext('empreendimento');
            // $table->float('latitude');, 
            // $table->float('longitude');
            $table->string('num_processo');
            $table->integer('doc_sei');
            $table->integer('numero');
            $table->date('data_concessao');
            $table->date('data_vencimento')->nullable();
            $table->integer('validade');
            $table->date('prazo_renovacao')->nullable();
            $table->longtext('observacao');
            $table->string('interessado');
           
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
