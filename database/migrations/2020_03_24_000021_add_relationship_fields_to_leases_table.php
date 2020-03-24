<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLeasesTable extends Migration
{
    public function up()
    {
        Schema::table('leases', function (Blueprint $table) {
            $table->unsignedInteger('typ_bytu_id')->nullable();
            $table->foreign('typ_bytu_id', 'typ_bytu_fk_1134200')->references('id')->on('typeproperties');
        });

    }
}
