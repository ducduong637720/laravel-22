<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name')
            ->after('id');
            $table->string('slug')
            ->after('name');
            $table->text('content')
            ->after('slug');
            $table->string('orgin_price')
            ->after('content');
            $table->string('sale_price')
            ->after('orgin_price');
            $table->integer('category_id')
            ->after('sale_price');
            $table->integer('brand_id')
            ->after('category_id');
            $table->integer('status')
            ->default(0)->after('brand_id');
            $table->json('option')
            ->after('status');
            $table->integer('view_count')->default(0)
            ->after('option');
            $table->integer('sale_count')->default(0)
            ->after('view_count');
            $table->integer('review_count')->default(0)
            ->after('sale_count');
            $table->json('info')->nullable()
            ->after('review_count');
            $table->integer('user_id')
            ->after('info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['name']);
            $table->dropColumn(['slug']);
            $table->dropColumn(['content']);
            $table->dropColumn(['orgin_price']);
            $table->dropColumn(['sale_price']);
            $table->dropColumn(['category_id']);
            $table->dropColumn(['brand_id']);
            $table->dropColumn(['status']);
            $table->dropColumn(['option']);
            $table->dropColumn(['view_count']);
            $table->dropColumn(['sale_count']);
            $table->dropColumn(['review_count']);
            $table->dropColumn(['info']);
            $table->dropColumn(['user_id']);
        });
    }
}
