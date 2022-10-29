<!-- ELBERT HUTAMA -->
<!-- 03081200053 -->
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("studentID",10);
            $table->string("nama",50);
            $table->string("jurusan");
            $table->string("tahunmasuk",4);
            $table->string("Jenis_Kelamin",1);
            $table->string("Alamat",10);
            $table->string("Tanggal_Lahir",10);
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
        Schema::dropIfExists('mahasiswas');
    }
}
