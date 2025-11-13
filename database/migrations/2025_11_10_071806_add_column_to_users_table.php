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
            $table->enum('jk', ['L', 'P'])->after('name')->default('L');
            $table->string('no_telp', 15)->after('jk')->nullable();
            $table->string('alamat', 100)->after('no_telp')->nullable();
            $table->string('photo', 100)->after('alamat')->nullable();
            $table->date('tgl_lahir')->after('photo')->nullable();
            $table->string('username', 10)->after('email')->unique();
            $table->string('password', 100)->after('username');
            $table->enum('role', ['admin', 'user'])->after('password')->default('user');
        });

        Schema::create('icons', function (Blueprint $table) {
            $table->id();
            $table->char('label', 1);
            $table->string('lokasi', 100);
            $table->timestamps();
        });

        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('icon_id')->constrained('icons')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 50);
            $table->decimal('berat', 4, 2);
            $table->string('keterangan', 100)->nullable();
            $table->string('foto', 100);
            $table->foreignId('storage_id')->constrained('storages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
        Schema::dropIfExists('storages');
        Schema::dropIfExists('icons');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['jk', 'no_telp', 'alamat', 'photo', 'tgl_lahir', 'email', 'username', 'role']);
        });
    }
};
