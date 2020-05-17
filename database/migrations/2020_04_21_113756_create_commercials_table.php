<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id')->unsigned();
            $table->string('nom');
            $table->foreign('post_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('cni');
            $table->string('genre');
            $table->string('date');
            $table->string('ville');
            $table->string('telephone');
            $table->string('matricule');
            $table->string('password');
            $table->string('typemarche');
            $table->string('typevente');
            $table->string('categorieproduit');
            $table->string('nomterritoire');
            $table->string('image');
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
        Schema::dropIfExists('commercials');
    }
}
