<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('id');
            $table -> string('name');
            $table -> string('venue');
            $table -> string('city');
            $table -> text('description') -> nullable();
            $table->timestamps();
            $table -> boolean('confirmed') ->default(false);
            $table -> string('comments') -> nullable();
            $table -> tinyInteger('age') -> unique() ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
