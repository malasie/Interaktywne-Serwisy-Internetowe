<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cels', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->mediumText('tresc');
            $table->string('termin');
            $table->timestamps();
        });

        DB::table('cels')->insert(
            [
                [
                    'nazwa' => 'Cel pierwszy',
                    'tresc' => 'tresc celu pierwszego',
                    'termin' => '30 Grudnia'
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cels');
    }
};
