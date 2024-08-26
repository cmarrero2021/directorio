<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Indice extends Model
{
    use SoftDeletes;

    protected $table = 'indices';

    protected $fillable = [
        'indice',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function revistas()
    {
        return $this->hasMany(Revista::class, 'indices_id');
    }
}
