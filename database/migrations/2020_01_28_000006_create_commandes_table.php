<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'commandes';

    /**
     * Run the migrations.
     * @table commandes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clients_id');
            $table->unsignedBigInteger('menus_id');
            $table->float('longitude')->nullable();
            $table->float('latitude')->nullable();
            $table->string('adresse')->nullable();

            $table->index(["menus_id"], 'fk_clients_has_menus_menus1_idx');

            $table->index(["clients_id"], 'fk_clients_has_menus_clients_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('clients_id', 'fk_clients_has_menus_clients_idx')
                ->references('id')->on('clients')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('menus_id', 'fk_clients_has_menus_menus1_idx')
                ->references('id')->on('menus')
                ->onDelete('no action')
                ->onUpdate('no action');
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
