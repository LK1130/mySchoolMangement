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
        Schema::create('m_exams', function (Blueprint $table) {
            $table->id();
            $table->string("e_name",256);
            $table->dateTime("e_duedate")->nullable();
            $table->integer("full_mark")->default(0);
            $table->integer("fail_marl")->default(0);
            $table->integer("del_flg")->default(0);
            $table->integer("created_by");
            $table->integer("updated_by")->nullable();
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
        Schema::dropIfExists('m_exams');
    }
};
