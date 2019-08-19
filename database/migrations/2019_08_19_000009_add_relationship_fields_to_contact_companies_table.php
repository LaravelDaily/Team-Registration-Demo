<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContactCompaniesTable extends Migration
{
    public function up()
    {
        Schema::table('contact_companies', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_249964')->references('id')->on('teams');
        });
    }
}
