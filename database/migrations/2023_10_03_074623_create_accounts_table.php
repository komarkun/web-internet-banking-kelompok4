<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('saldo', 10, 2); // Decimal untuk kolom saldo dengan 10 digit total dan 2 digit di belakang koma
            $table->timestamps(); // Timestamps untuk kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
