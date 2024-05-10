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
        Schema::create('deposit', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('payment_method_id');
            $table->double('amount')->default(0);
            $table->text('image');
            $table->enum('status',['processing','failed','cancelled','completed'])->default('processing');
            $table->text('wallet_address')->nullable();
            $table->string('reference');
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
        Schema::dropIfExists('deposit');
    }
};
