<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopleveldomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topleveldomains', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('remote_id')->nullable();
            $table->string('name');
            $table->float('buy_price', 10, 2)->default(0);
            $table->float('sell_price', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topleveldomains');
    }
}
