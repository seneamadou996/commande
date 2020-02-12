<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'menus';

    /**
     * Run the migrations.
     * @table menus
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->string('titre');
            $table->text('description');
            $table->string('categorie', 45)->nullable();
            $table->string('image_url')->nullable()->default(null);
            $table->string('image_name')->nullable()->default(null);
            $table->string('image_driver', 45)->nullable();

            $table->unique(["uuid"], 'uuid_UNIQUE');
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
