<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained()->cascadeOnDelete();
            $table->bigInteger('remote_id')->nullable();
            $table->string('domainname');
            $table->integer('status')->default(0);
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->integer('diskspace')->default(0)->nullable();
            $table->integer('diskspace_reserved')->default(0);
            $table->integer('bandwidth')->default(0)->nullable();
            $table->boolean('managed')->default(false);

            $table->string('docroot')->default('public_html');
            $table->boolean('ssl')->default(false);
            $table->boolean('suspended')->default(false);
            $table->string('template')->default('default');

            $table->float('buy_price', 10, 2)->default(0);
            $table->float('sell_price', 10, 2)->default(0);
            $table->string('package')->nullable();

            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->timestamp('real_end_at')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostings');
    }
}
