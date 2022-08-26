<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->date('date_n')->nullable();
            $table->string('lieu_n')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('l_motivation')->nullable();
            $table->string('f_voeux')->nullable();
            $table->string('r_bac')->nullable();
            $table->string('c_diplome')->nullable();
            $table->string('c_relevet')->nullable();
            $table->string('autorisation')->nullable();
            $table->string('type_inscription')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condidates');
    }
}
