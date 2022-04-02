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
            $table->char('InvoiceNo',10)->primary();
            $table->dateTime('InvoiceDate',$precision = 0);
            $table->char('MemberID',10);
            $table->char('ProductID',10);
            $table->integer('Quantity');
            $table->integer('Price');
            // $table->timestamps();

            $table->unique(['MemberID', 'ProductID'], 'InvoiceDate');
            $table->foreign('MemberID')->references('MemberID')->on('members');
            $table->foreign('ProductID')->references('ProductID')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
