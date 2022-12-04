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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('sender_email')->unique();
            $table->string('sender_mobile');
            $table->string('sender_branch');
            $table->string('sender_address');
            $table->string('sender_city');
            $table->string('receiver_name');
            $table->string('receiver_email')->unique();
            $table->string('receiver_mobile');
            $table->string('receiver_branch');
            $table->string('receiver_address');
            $table->string('receiver_city');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('bookings');
    }
};
