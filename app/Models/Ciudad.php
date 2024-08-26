<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    use SoftDeletes;

    protected $table = 'ciudades';

    protected $fillable = [
        'estado_id',
        'ciudad',
        'capital',
        'usuario_id'
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function revistas()
    {
        return $this->hasMany(Revista::class, 'ciudad_id');
    }
}
