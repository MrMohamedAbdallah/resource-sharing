<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("url");
            $table->string("name");
            $table->unsignedBigInteger("stack_id");
            $table->unsignedBigInteger("category_id");
            $table->foreign("stack_id")->references("id")->on("stacks");
            $table->foreign("category_id")->references("id")->on("categories");
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
        Schema::dropIfExists('resources');
    }
}
