<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_list', function (Blueprint $table) {
            $table->increments('id');
            $table->date('time');
            $table->string('key1');
            $table->string('key2');
            $table->double('amount', 15, 2); //the amount of money
            $table->integer('moneyType'); //the money's type: Chinese or japanese
            $table->integer('way'); //the money is used to do what
            $table->integer('type'); //how to pay the money,such as crecit card
            $table->string('remarks');
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
        Schema::dropIfExists('money_list');
    }
}
