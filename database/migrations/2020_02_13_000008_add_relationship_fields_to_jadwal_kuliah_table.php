<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToJadwalKuliahTable extends Migration
{
    public function up()
    {
        Schema::table('jadwal_kuliah', function (Blueprint $table) {
            $table->unsignedInteger('mata_kuliah_id');
            $table->foreign('mata_kuliah_id', 'class_fk_1001508')->references('id')->on('mata_kuliah');
        });
    }
}
