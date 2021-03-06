<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserUpdatedIdColumnPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->integer('user_updated_id')
            ->after('user_created_id');
            $table->integer('view_count')->default(0)
            ->after('status');
            $table->integer('category_id')
            ->after('user_updated_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropColumn(['user_updated_id','view_count','category_id']);
        });
    }
}
