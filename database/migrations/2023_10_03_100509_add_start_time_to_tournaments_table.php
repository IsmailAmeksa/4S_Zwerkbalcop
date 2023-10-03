<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStartTimeToTournamentsTable extends Migration
{
    public function up()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            // Voeg een nieuwe kolom 'start_time' toe van het type 'time' en maak het nullable
            $table->time('start_time')->nullable();
        });
    }

    public function down()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            // Verwijder de kolom als de migratie wordt teruggedraaid
            $table->dropColumn('start_time');
        });
    }
}
