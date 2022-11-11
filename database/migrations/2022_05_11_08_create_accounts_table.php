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
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->autoIncrement()->startingValue(0);
            $table->integer('broker_id')->unsigned()->nullable();
            $table->integer('margin_mode_id')->unsigned()->nullable();
            $table->integer('hedge_mode_id')->unsigned()->nullable();
            $table->foreignId('user_id');
            $table->string('number', 255)->nullable();
            $table->string('owner', 255)->nullable();
            $table->double('balance', 32, 8)->nullable();
            $table->tinyInteger('trade_allowed')->nullable();
            $table->tinyInteger('trade_expert_allowed')->nullable();
            $table->tinyInteger('terminal_trade_allowed')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('created_at')->useCurrent();

            
            $table->index('broker_id', 'account_broker_id');
            $table
            ->foreign('broker_id')
            ->references('id')
            ->on('brokers')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
            $table->index('hedge_mode_id', 'account_hedge_mode_id');
            $table
            ->foreign('hedge_mode_id')
            ->references('id')
            ->on('account_hedge_modes')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
            $table->index('margin_mode_id', 'account_margin_mode_id');
            $table
                ->foreign('margin_mode_id')
                ->references('id')
                ->on('account_margin_modes')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            $table->index('user_id', 'account_user_id');
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
