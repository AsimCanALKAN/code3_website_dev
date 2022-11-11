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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->autoIncrement()->startingValue(0);
            $table->integer('process_id')->unsigned()->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('error_id')->unsigned()->nullable();
            $table->integer('breakout_type_id')->unsigned()->nullable();
            $table->string('ticket', 255)->nullable();
            $table->decimal('sended_price', 10, 5)->nullable();
            $table->dateTime('sended_time')->nullable();
            $table->decimal('open_price', 10, 5)->nullable();
            $table->dateTime('open_time')->nullable();
            $table->decimal('closed_price', 10, 5)->nullable();
            $table->dateTime('closed_time')->nullable();
            $table->float('volume', 8, 2)->nullable();
            $table->float('comission', 8, 2)->nullable();
            $table->float('swap', 8, 2)->nullable();
            $table->float('profit', 8, 2)->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('created_at')->useCurrent();

            $table->index('process_id', 'order_process_id');
            $table->foreign('process_id')->references('id')->on('order_processes')->onDelete('restrict')->onUpdate('restrict');

            $table->index('type_id', 'order_type_id');
            $table->foreign('type_id')->references('id')->on('order_types')->onDelete('restrict')->onUpdate('restrict');

            $table->index('error_id', 'order_error_id');
            $table->foreign('error_id')->references('id')->on('order_errors')->onDelete('restrict')->onUpdate('restrict');

            $table->index('breakout_type_id', 'order_breakout_type_id');
            $table->foreign('breakout_type_id')->references('id')->on('order_breakout_types')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
