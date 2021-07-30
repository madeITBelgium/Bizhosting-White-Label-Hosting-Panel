<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainnamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domainnames', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained()->setNullOnDelete();
            $table->foreignId('topleveldomain_id')->nullable()->constrained()->setNullOnDelete();
            $table->foreignId('hosting_id')->nullable()->constrained()->setNullOnDelete();
            $table->bigInteger('remote_id')->nullable();
            $table->string('domainname');
            $table->integer('status')->default(0);
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamp('real_end_at')->nullable();
            $table->float('buy_price', 10, 2)->default(0);
            $table->float('sell_price', 10, 2)->default(0);
            $table->string('auth_token')->nullable();
            $table->boolean('remote_is_locked')->default(false);
            $table->boolean('remote_autorenew')->default(true);
            $table->boolean('main_domainname')->default(false);
            $table->text('nameservers')->nullable();
            $table->text('contact')->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('domainnames');
    }
}
