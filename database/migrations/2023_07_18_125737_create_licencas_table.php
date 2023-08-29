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
            $table->foreignId('id_ra')->constrained('regiao_administrativa')->nullable()->default('NULL');
            $table->foreignId('id_empreendimento')->constrained('tipo_empreendimento')->nullable()->default('NULL');
            $table->foreignId('id_tipo')->constrained('tipo')->nullable()->default('NULL');
            $table->foreignId('id_situacao')->constrained('situacao')->nullable()->default('NULL');
            $table->foreignId('id_vigencia')->constrained('vigencia')->nullable()->default('NULL');
            //$table->foreignId('id_bacia')->constrained('bacia_hidrografica');
           


            $table->longtext('empreendimento')->nullable();
            // $table->float('latitude');, 
            // $table->float('longitude');
            $table->string('num_processo')->nullable();
            $table->integer('doc_sei')->nullable();
            $table->integer('numero')->nullable();
            $table->date('data_concessao')->nullable();
            $table->date('data_vencimento')->nullable();
            $table->integer('validade')->nullable();
            $table->date('prazo_renovacao')->nullable();
            $table->longtext('observacao')->nullable();
            $table->string('interessado')->nullable();
            $table->string('arquivo')->nullable();
           
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
