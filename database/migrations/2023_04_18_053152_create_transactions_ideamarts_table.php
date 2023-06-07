<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_ideamarts', function (Blueprint $table) {
            $table->id();
            $table->string('timeStamp')->nullable();
            $table->string('longDescription')->nullable();
            $table->string('externalTrxId')->nullable();
            $table->string('statusDetail')->nullable();
            $table->string('shortDescription')->nullable();
            $table->string('internalTrxId')->nullable();
            $table->string('statusCode')->nullable();
            $table->unsignedBigInteger('user')->nullable();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('transactions_ideamarts');
    }
};
