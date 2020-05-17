<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlleursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlleurs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nom');
            $table->string('cni');
            $table->string('genre');
            $table->string('date');
            $table->string('telephone');
            $table->string('ville');
            $table->string('matricule');
            $table->string('password');
            $table->string('typeterritoire');
            $table->string('nomterritoire');
            $table->string('univercontrolle');
            $table->string('categoriecontrolle');
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
        Schema::dropIfExists('controlleurs');
    }
}
