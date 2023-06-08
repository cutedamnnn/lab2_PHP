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
    // starting wh
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('block');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->dateTime('reg');
            $table->timestamps();
        });
        // Проверить что данные появились в БД
        if (Schema::hasTable('customers')) {
            echo "table customers: true\n";
            if (Schema::hasColumn('customers', 'id')) {
                echo "column 'id': true\n";
            }
            if (Schema::hasColumn('customers', 'name')) {
                echo "column 'name': true\n";
            }
            if (Schema::hasColumn('customers', 'block')) {
                echo "column 'block': true\n";
            }
            if (Schema::hasColumn('customers', 'surname')) {
                echo "column 'surname': true\n";
            }
            if (Schema::hasColumn('customers', 'email')) {
                echo "column 'email': true\n";
            }
            if (Schema::hasColumn('customers', 'phone')) {
                echo "column 'phone': true\n";
            }
            if (Schema::hasColumn('customers', 'reg')) {
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
        Schema::dropIfExists('customers');
    }
};
