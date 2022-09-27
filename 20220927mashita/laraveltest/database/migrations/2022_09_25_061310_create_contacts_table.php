<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',255)->nullable(); //こうしないと進めなかった
            $table->string('familyname',127); //苗字
            $table->string('name',127); //名前、苗字を組み合わせてフルネームにする
            $table->tinyInteger('gender');
            $table->string('email',255);
            $table->char('postcode',8);
            $table->string('address',255);
            $table->string('building_name',255)->nullable();
            $table->text('option');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->usecurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
