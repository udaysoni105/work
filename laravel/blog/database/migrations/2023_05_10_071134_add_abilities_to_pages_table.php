<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddAbilitiesToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('abilities')->unsigned()->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            DB::statement('UPDATE `pages` SET `page_id` = 0 WHERE `page_id` IS NULL;');
            DB::statement('ALTER TABLE `pages` MODIFY `page_id` INTEGER UNSIGNED NOT NULL;');        });
    }
}
