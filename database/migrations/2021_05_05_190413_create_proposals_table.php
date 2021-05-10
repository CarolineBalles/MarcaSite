<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('client_name', 165);
            $table->string('address', 255);
            $table->string('service', 64);
            $table->float('amount');
            $table->float('entrance');
            $table->integer('number_installments');
            $table->float('installments_value');
            $table->date('pay_day');
            $table->date('installment_date');
            $table->string('attachment', 255);
            $table->enum('status', ['Reprovado', 'Aprovado', 'Fechado', 'Aberto']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
