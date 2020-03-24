<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeleasesTable extends Migration
{
    public function up()
    {
        Schema::create('typeleases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typ_prenajmu')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
