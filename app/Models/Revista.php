<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Revista extends Model
{
    use SoftDeletes;

    protected $table = 'revistas';

    protected $fillable = [
        'area_conocimiento_id',
        'indices_id',
        'lenguajes_id',
        'revista',
        'correo_revista',
        'editorial_id',
        'periodicidad_id',
        'formato_id',
        'estado_id',
        'ciudad_id',
        'nombres_editor',
        'apellidos_editor',
        'correo_editor',
        'deposito_legal_impreso',
        'deposito_legal_digital',
        'issn_impreso',
        'issn_digital',
        'url',
        'anio_inicial',
        'direccion',
        'telefono',
        'resumen',
        'portada',
        'usuario_id'
    ];

    // Relaciones con otras tablas
    public function areaConocimiento()
    {
        return $this->belongsTo(AreaConocimiento::class);
    }

    public function indice()
    {
        return $this->belongsTo(Indice::class);
    }

    public function lenguaje()
    {
        return $this->belongsTo(Idioma::class);
    }

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function periodicidad()
    {
        return $this->belongsTo(Periodicidad::class);
    }

    public function formato()
    {
        return $this->belongsTo(Formato::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
