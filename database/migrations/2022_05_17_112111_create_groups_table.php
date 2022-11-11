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
        Schema::create('groups', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique()->autoIncrement()->startingValue(0);
            $table->string('name', 255)->nullable();
            $table->foreignId('user_id');
            $table->datetime('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->datetime('created_at')->useCurrent();
            $table->index('user_id');
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
};
