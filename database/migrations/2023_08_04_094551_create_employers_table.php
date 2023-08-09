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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('suffix');
            $table->string('pronouns');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('contact_number')->unique();
            $table->string('country');
            $table->integer('country_code');
            $table->string('city');
            $table->string('address');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('profile_image')->nullable();
            $table->string('cover_image');
            $table->string('plan');
            $table->decimal('plan_amount',10,2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
