<?php

use Illuminate\Database\Migrations\Migration;

class AddUserIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('posts', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('posts', function ($table) {
                $table->dropForeign('posts_user_id_foreign');
                $table->dropColumn('user_id');
                });
    }
}
