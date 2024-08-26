<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use SoftDeletes;

    protected $table = 'estados';

    protected $fillable = [
        'estado',
        'iso_3166_2',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }

    public function revistas()
    {
        return $this->hasMany(Revista::class, 'estado_id');
    }
}
