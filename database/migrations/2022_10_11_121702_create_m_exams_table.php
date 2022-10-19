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
            $table->unsignedBigInteger("category_id")->nullable();
            $table->dateTime("e_duedate")->nullable();
            $table->integer("full_mark")->default(0);
            $table->integer("fail_mark")->default(0);
            $table->integer("del_flg")->default(0);
            $table->integer("created_by");
            $table->integer("updated_by")->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on("m_categories")
                ->onDelete('restrict')->onUpdate('cascade');

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
