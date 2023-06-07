<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTableAddSomeColums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('skype_id')->after('remember_token')->nullable();
            $table->decimal('funds',13,5)->after('remember_token')->nullable();
            $table->integer('role')->after('remember_token')->default(2)->nullable();
            $table->integer('status')->after('remember_token')->default(0)->nullable();
            $table->timestamp('last_login')->after('remember_token')->nullable();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
