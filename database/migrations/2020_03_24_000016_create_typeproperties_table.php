<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypepropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('typeproperties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typ_bytu');
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
