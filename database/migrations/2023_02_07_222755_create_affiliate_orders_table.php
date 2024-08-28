<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffiliateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliate_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affiliate_id')->nullable();
            $table->foreignId('hosting_id')->nullable();
            $table->foreignId('domainname_id')->nullable();
            $table->string('domainname')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->float('price', 6, 2)->default(25.00);
            $table->float('commission', 6, 2)->default(25.00);
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
        Schema::dropIfExists('affiliate_orders');
    }
}
