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
        Schema::create('consessions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('enterprise', 255);
            $table->string('ruc', 25);
            $table->string('department', 255);
            $table->date('vigency');
            $table->boolean('va_c');
            $table->date('start');
            $table->boolean('type');
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
        Schema::dropIfExists('consessions');
    }
};
