<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->nvarchar('ma', 20)->nullable();
            $table->nvarchar('TenSP', 150);
            $table->int('NhomSP', 20)->nullable();
            $table->int('NhaCC', 20)->nullable();
            $table->ntext('MoTa')->nullable();
            $table->money_format('GiaNhap')->nullable();
            $table->money_format('GiaSi')->nullable();
            $table->money_format('GiaLe')->nullable();
            $table->money_format('SaleCap1')->nullable();
            $table->money_format('SaleCap2')->nullable();
            $table->money_format('SaleCap3')->nullable();
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
        Schema::dropIfExists('product');
    }
};
