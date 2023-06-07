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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user');
            $table->date('date_initiated');
            $table->integer('amount');
            $table->string('method');
            $table->string('responseData')->nullable();
            $table->string('totalAmount')->nullable();
            $table->string('responseCode')->nullable();
            $table->string('txnReference')->nullable();
            $table->string('token')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
