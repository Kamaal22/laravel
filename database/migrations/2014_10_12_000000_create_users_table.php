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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 100);
            $table->string('username', 25)->unique();
            $table->text('password');
            $table->string('phone', 100);
            $table->string('email', 525)->unique();
            $table->longText('addtional_info')->nullable();
            $table->enum('role', ['admin', 'manager', 'employee', 'customer']);
            $table->longText('special_permissions')->nullable();
            $table->longText('log')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
