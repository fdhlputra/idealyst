<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('university')->nullable()->after('email');
            $table->string('major')->nullable()->after('university');
            $table->string('year')->nullable()->after('major');
            $table->text('bio')->nullable()->after('year');
            $table->string('avatar')->nullable()->after('bio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'university',
                'major',
                'year',
                'bio',
                'avatar'
            ]);
        });
    }
};
