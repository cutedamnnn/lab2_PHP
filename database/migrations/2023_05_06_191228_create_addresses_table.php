<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('title');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->integer('floor'); // этаж
            $table->integer('room');
            $table->string('code');
            $table->dateTime('reg');
            $table->timestamps();
        });
        //Проверка на наличие таблицы и её атрибутов
        if (Schema::hasTable('addresses')) {
            echo "table addresses: true\n";

            if (Schema::hasColumn('addresses', 'id')) {
                echo "column 'id': true\n";
            }
            if (Schema::hasColumn('addresses', 'customer_id')) {
                echo "column 'customer_id': true\n";
            }
            if (Schema::hasColumn('addresses', 'title')) {
                echo "column 'title': true\n";
            }
            if (Schema::hasColumn('addresses', 'city')) {
                echo "column 'city': true\n";
            }
            if (Schema::hasColumn('addresses', 'street')) {
                echo "column 'street': true\n";
            }
            if (Schema::hasColumn('addresses', 'house')) {
                echo "column 'house': true\n";
            }
            if (Schema::hasColumn('addresses', 'floor')) {
                echo "column 'floor': true\n";
            }
            if (Schema::hasColumn('addresses', 'room')) {
                echo "column 'room': true\n";
            }
            if (Schema::hasColumn('addresses', 'code')) {
                echo "column 'code': true\nn";
            }
            if (Schema::hasColumn('addresses', 'reg')) {
                echo "column 'reg': true\n";
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
