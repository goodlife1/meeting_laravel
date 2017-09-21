<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('chatter_discussion', function (Blueprint $table) {
//            $table->foreign('chatter_category_id')->references('id')->on('chatter_categories')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//            $table->foreign('user_id')->references('id')->on('users')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//        });
//        Schema::table('chatter_post', function (Blueprint $table) {
//            $table->foreign('chatter_discussion_id')->references('id')->on('chatter_discussion')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//            $table->foreign('user_id')->references('id')->on('users')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
