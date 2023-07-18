<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_program_id');
            $table->unsignedBigInteger('destination_program_id');
            $table->foreign('source_program_id')->references('id')->on('programs');
            $table->foreign('destination_program_id')->references('id')->on('programs');
            $table->decimal('transfer_rate', 10, 5);
            $table->integer('transfer_time');
            $table->string('transfer_time_units');
            $table->boolean('bonus_rate');
            $table->dateTime('bonus_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropForeign(['source_program_id']);
            $table->dropForeign(['destination_program_id']);
        });

        Schema::dropIfExists('partners');
    }
};
