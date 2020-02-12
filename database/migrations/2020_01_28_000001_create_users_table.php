<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36);
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email');
            $table->string('role')->nullable();
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('password');
            $table->rememberToken();

            $table->unique(["uuid"], 'uuid_UNIQUE');

            $table->unique(["email"], 'users_email_unique');
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
