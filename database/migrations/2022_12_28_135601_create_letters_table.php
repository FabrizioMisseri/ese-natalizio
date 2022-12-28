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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('city');
            $table->dateTime('arrival_date');
            $table->enum('gift', ['giocattoli', 'vestiti', 'droga', 'porno', 'cagne', ' cura della persona']);
            $table->text('letter_text');
            $table->tinyInteger('rating');
            $table->boolean('is_delivered')->default(0);
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
        Schema::dropIfExists('letters');
    }
};
