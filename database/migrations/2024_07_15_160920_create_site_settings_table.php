<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('profile')->nullable()->comment('save profile image in sidebar');
            $table->text('about_me')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('telegram')->nullable();
            $table->json('social_media')->nullable()->comment('social item save with type json keys(name , link , icon_class');
            $table->json('what_i_do')->nullable()->comment('items what i do save with type json keys(name , icon , description)');
            $table->boolean('feedbacks_enabled')->default(true)->comment('for home page manage feedback section');
            $table->boolean('customers_enabled')->default(true)->comment('for home page manage customers section');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
