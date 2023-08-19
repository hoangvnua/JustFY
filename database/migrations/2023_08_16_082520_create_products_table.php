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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->char('ma')->nullable();
            $table->text('TenSP');
            $table->tinyText('DVT')->nullable();
            $table->integer('NhomSP')->nullable();
            $table->integer('NhaCC')->nullable();
            $table->text('MoTa')->nullable();
            $table->decimal('GiaNhap')->nullable();
            $table->decimal('GiaSi')->nullable();
            $table->decimal('GiaLe')->nullable();
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
        Schema::dropIfExists('products');
    }
};
