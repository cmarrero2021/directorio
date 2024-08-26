<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->string('iso_3166_2');
            $table->timestamp('created_at', 6)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at', 6)->nullable();
            $table->softDeletes('deleted_at', 6);
            $table->foreignId('usuario_id')->constrained('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
