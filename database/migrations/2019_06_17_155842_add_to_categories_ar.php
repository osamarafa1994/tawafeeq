<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToCategoriesAr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories_ar', function (Blueprint $table) {
            //
            $table->string('category_type')->default(0);
            $table->string('sizes')->nullable();
            $table->string('discount')->default(0);
            $table->string('availability')->default(1);
            $table->string('status')->default(1);
            $table->text('details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories_ar', function (Blueprint $table) {
            //
            $table->dropColumn('category_type');
            $table->dropColumn('sizes');
            $table->dropColumn('discount');
            $table->dropColumn('availability');
            $table->dropColumn('status');
            $table->dropColumn('details');
        });
    }
}
