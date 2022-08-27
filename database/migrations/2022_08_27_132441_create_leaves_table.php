<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('matricule')->nullable();
            $table->string('year_study')->nullable();
            $table->string('domaine')->nullable();
            $table->string('filiere')->nullable();
            $table->string('speciality')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('annee_univ')->nullable();
            $table->string('c_etudiant')->nullable();
            $table->string('c_inscription')->nullable();
            $table->string('p_justificative')->nullable();
            $table->string('raison')->nullable();
            $table->string('status')->default('En attente');
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
        Schema::dropIfExists('leaves');
    }
}
