<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevistasTable extends Migration
{
    public function up()
    {
        Schema::create('revistas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_conocimiento_id')->constrained('areas_conocimiento');
            $table->foreignId('indices_id')->constrained('indices');
            $table->foreignId('lenguajes_id')->constrained('idiomas');
            $table->string('revista', 50);
            $table->string('correo_revista', 25);
            $table->foreignId('editorial_id')->constrained('editoriales');
            $table->foreignId('periodicidad_id')->constrained('periodicidad');
            $table->foreignId('formato_id')->constrained('formatos');
            $table->foreignId('estado_id')->constrained('estados');
            $table->foreignId('ciudad_id')->constrained('ciudades');
            $table->string('nombres_editor', 20);
            $table->string('apellidos_editor', 20);
            $table->string('correo_editor', 25);
            $table->string('deposito_legal_impreso', 15)->unique()->nullable();
            $table->string('deposito_legal_digital', 15)->unique()->nullable();
            $table->string('issn_impreso', 8)->unique()->nullable();
            $table->string('issn_digital', 10)->unique()->nullable();
            $table->string('url', 50);
            $table->smallInteger('anio_inicial');
            $table->text('direccion');
            $table->string('telefono', 11)->nullable();
            $table->text('resumen')->default('');
            $table->string('portada', 255)->default('');
            $table->timestamp('created_at', 6)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at', 6)->nullable();
            $table->softDeletes('deleted_at', 6);
            $table->foreignId('usuario_id')->constrained('users');

            // Índices individuales
            $table->index('area_conocimiento_id');
            $table->index('ciudad_id');
            $table->index('deposito_legal_digital');
            $table->index('deposito_legal_impreso');
            $table->index('editorial_id');
            $table->index(['estado_id', 'ciudad_id']);
            $table->index('estado_id');
            $table->index('formato_id');
            $table->index('lenguajes_id');
            $table->index('indices_id');
            $table->index('issn_digital');
            $table->index('issn_impreso');
            $table->index('periodicidad_id');

            // Índice completo
            $table->index(
                [
                    'id',
                    'area_conocimiento_id',
                    'indices_id',
                    'lenguajes_id',
                    'revista',
                    'editorial_id',
                    'periodicidad_id',
                    'formato_id',
                    'estado_id',
                    'ciudad_id',
                    'deposito_legal_impreso',
                    'deposito_legal_digital',
                    'issn_impreso',
                    'issn_digital'
                ],
                'idx_revistas_full'
            );
        });
    }

    public function down()
    {
        Schema::dropIfExists('revistas');
    }
}
