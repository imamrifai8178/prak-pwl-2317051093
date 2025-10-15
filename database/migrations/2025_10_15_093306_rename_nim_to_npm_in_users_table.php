<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNimToNpmInUsersTable extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('nim', 'npm');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('npm', 'nim');
        });
    }
}
