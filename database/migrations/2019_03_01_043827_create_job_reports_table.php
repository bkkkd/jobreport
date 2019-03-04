<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('position');
            $table->string('price');
            $table->longText('content');
            $table->longText('modify_content');
            $table->string('ip');
            $table->string('useragent');
            $table->foreign('company_id')
                ->references('id')
                ->on('job_companies');
            $table->integer('status');
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
        Schema::dropIfExists('job_reports');
    }
}
