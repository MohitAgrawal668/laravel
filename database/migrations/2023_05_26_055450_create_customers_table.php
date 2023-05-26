<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->enum('gender',['M','F','O']);
            $table->text('address');
            $table->date('dob');
            $table->string('password');
            $table->Integer('status')->default(1);
            $table->timestamps();  //Created At and Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
