<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVrevistasView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
            CREATE VIEW vrevistas AS
            SELECT
                a.id,
                a.area_conocimiento_id,
                b.area_conocimiento,
                a.indices_id,
                c.indice,
                a.lenguajes_id,
                j.idioma,
                a.revista,
                a.correo_revista,
                a.editorial_id,
                d.editorial,
                a.periodicidad_id,
                e.periodicidad,
                a.formato_id,
                f.formato,
                a.estado_id,
                g.estado,
                a.ciudad_id,
                h.ciudad,
                a.nombres_editor,
                a.apellidos_editor,
                a.correo_editor,
                a.deposito_legal_impreso,
                a.deposito_legal_digital,
                a.issn_impreso,
                a.issn_digital,
                a.url,
                a.anio_inicial,
                a.direccion,
                a.telefono,
                a.resumen,
                a.portada,
                a.usuario_id,
                i.name,
                a.created_at,
                a.updated_at,
                a.deleted_at
            FROM revistas a
            LEFT JOIN areas_conocimiento b ON b.id = a.area_conocimiento_id
            LEFT JOIN indices c ON c.id = a.indices_id
            LEFT JOIN editoriales d ON d.id = a.editorial_id
            LEFT JOIN periodicidad e ON e.id = a.periodicidad_id
            LEFT JOIN formatos f ON f.id = a.formato_id
            LEFT JOIN estados g ON g.id = a.estado_id
            LEFT JOIN ciudades h ON h.id = a.ciudad_id
            LEFT JOIN users i ON i.id = a.usuario_id
            LEFT JOIN idiomas j ON j.id = a.lenguajes_id
            WHERE a.deleted_at IS NULL
            ORDER BY id ASC;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vrevistas');
    }
}
