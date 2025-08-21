<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('permission_role', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignUuid('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreignUuid('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
        Schema::create('admin_role', function (Blueprint $table) {
            $table->foreignUuid('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreignUuid('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->primary(['admin_id', 'role_id']);
        });
        Schema::create('customer_role', function (Blueprint $table) {
            $table->foreignUuid('customer_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreignUuid('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->primary(['customer_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('admin_role');
        Schema::dropIfExists('customer_role');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_role');
    }
};
