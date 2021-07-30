<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->cascadeOnDelete();
            $table->foreignId('hosting_id')->nullable()->constrained()->setNullOnDelete();
            $table->foreignId('domainname_id')->nullable()->constrained()->setNullOnDelete();

            $table->string('description')->nullable();

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
