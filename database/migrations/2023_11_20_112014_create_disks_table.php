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
        Schema::create('disk', function (Blueprint $table) {
            $table->id();
            $table->string('title',60);
            $table->foreignId('idartist');
            $table->integer('year')->nullable();
            $table->binary('cover')->nullable();
            $table->timestamps();
            
            $table->foreign('idartist')->references('id')->on('artist')->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['idartist','title']);
            
        });
          $sql = 'alter table disk change cover cover longblob';
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disk');
    }
};
