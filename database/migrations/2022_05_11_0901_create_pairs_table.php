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
        Schema::create('pairs', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->autoIncrement()->startingValue(0);
            $table->integer('broker_id')->unsigned()->nullable();
            $table->string('symbol', 255)->nullable();
            $table->double('bid', 10, 5)->nullable();
            $table->double('ask', 10, 5)->nullable();
            $table->integer('digits')->nullable();
            $table->double('contract_size', 10, 5)->nullable();
            $table->double('min_volume', 10, 5)->nullable();
            $table->integer('volume_decimal_count')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('created_at')->useCurrent();

            $table->index('broker_id', 'broker_id_2');
            $table->foreign('broker_id')->references('id')->on('brokers')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pairs');
    }
};
