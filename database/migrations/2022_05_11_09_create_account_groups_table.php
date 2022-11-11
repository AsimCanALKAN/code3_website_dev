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
        Schema::create('account_groups', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->autoIncrement()->startingValue(0);
            $table->integer('account_id')->unsigned()->nullable();
            $table->integer('pair_id')->unsigned()->nullable();
            $table->integer('group_id')->unsigned()->nullable();
            $table->tinyInteger('master')->default(0);
            $table->double('min_volume', 15, 8)->nullable();
            $table->double('alloted_percentage')->nullable();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('created_at')->useCurrent();

            $table->index('account_id', 'account_group_account_id');
            $table->index('pair_id', 'account_group_pair_id');
            $table->index('group_id', 'account_group_broker_id');

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('pair_id')->references('id')->on('pairs')->onDelete('restrict')->onUpdate('restrict');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_groups');
    }
};
