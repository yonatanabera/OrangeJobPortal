<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('location_id');
            $table->string('name');
            $table->string('career_type');
            $table->string('employment_type');
            $table->integer('salary');
            $table->text('requirement');
            $table->text('description');
            $table->text('how_to_apply');
            $table->timestamp('posted_on')->default(Date('y:m:d'));
            $table->timestamp('deadline')->default(Date('y:m:d'));
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            
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
        Schema::dropIfExists('jobs');
    }
}
