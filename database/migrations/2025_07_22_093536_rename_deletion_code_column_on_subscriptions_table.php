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
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->renameColumn('cancellation_code', 'cancellation_code');
        });


        Schema::table('subscriptions', function (Blueprint $table) {
            $table->text('cancellation_code')->nullable(false)->change();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->text('cancellation_code')->nullable()->change();
        });

        Schema::table('subscriptions', function (Blueprint $table) {
            $table->renameColumn('cancellation_code', 'cancellation_code');
        });
    }
};
