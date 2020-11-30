<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclinedAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declined_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('lawyer_id');
            $table->string('lawyer_name');
            $table->string('client_name')->unique();
            $table->string('client_email');
           
           
            $table->json('type_of_legal_issues');
            $table->string('description');
            $table->date('date');
            $table->time('time')->nullable();
            $table->string('current_status');
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
        Schema::dropIfExists('declined_appointments');
    }
}
