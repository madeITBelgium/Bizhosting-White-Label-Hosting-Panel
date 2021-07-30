<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained()->cascadeOnDelete();
            $table->integer('status')->default(0); // 0 => Created, 1 => Sent, 2 => Paid
            $table->timestamp('invoice_date')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('invoice_pdf')->nullable();

            $table->string('name')->nullable();
            $table->string('street')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('vatnr')->nullable();

            $table->float('excl_amount', 10, 2)->default(0);
            $table->float('vat_amount', 10, 2)->default(0);
            $table->float('incl_amount', 10, 2)->default(0);

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
