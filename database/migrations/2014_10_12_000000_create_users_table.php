<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('no_telepon');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->string('tempat');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['panitia', 'anggota']);
            $table->string('surat_komitment');
            $table->timestamps();
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
}
