<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => env("ADMIN_USER", "admin@localhost"),
            'password' => Hash::make(env("ADMIN_PASSWORD", "password")),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now()
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
