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
        Schema::create('breakouts', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->autoIncrement()->startingValue(0);
            $table->integer('pair_id')->unsigned()->nullable();
            $table->integer('account_id')->unsigned()->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('magic_number')->nullable();
            $table->double('first_size')->nullable();
            $table->double('input_size')->nullable();
            $table->tinyInteger('tp_max_active')->nullable();
            $table->double('tp_max_value')->nullable();
            $table->tinyInteger('tp_min_active')->nullable();
            $table->double('tp_min_value')->nullable();
            $table->tinyInteger('tsl_active')->nullable();
            $table->decimal('tsl_value', 10, 5)->nullable();
            $table->double('sl_max')->nullable();
            $table->decimal('box_up_price', 10, 5)->nullable();
            $table->decimal('box_down_price', 10, 5)->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('created_at')->useCurrent();

            $table->index('pair_id', 'breakout_pair_id');
            $table->index('account_id', 'breakout_account_id');
            $table->index('type_id', 'breakout_type_id');

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('pair_id')->references('id')->on('pairs')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('type_id')->references('id')->on('breakout_types')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('breakouts');
    }
};
