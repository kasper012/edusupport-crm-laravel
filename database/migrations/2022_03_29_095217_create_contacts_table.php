<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text('name'); 
            $table->text('phone'); 
            $table->text('email'); 
            $table->text('country'); 
            $table->text('speciality');
            $table->text('degree'); 
            $table->text('graduate_year'); 
            $table->text('gpa');
            $table->text('english_level'); 
            $table->text('deutshche_level'); 
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
        Schema::dropIfExists('contacts');
    }
}
