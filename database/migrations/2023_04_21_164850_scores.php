<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('scores')->insert(
            array(
                'name' => 'Bad',
            )
        );

        DB::table('scores')->insert(
            array(
                'name' => 'Good',
            )
        );

        DB::table('scores')->insert(
            array(
                'name' => 'Very good',
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
