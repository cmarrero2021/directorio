<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formato extends Model
{
    use SoftDeletes;

    protected $table = 'formatos';

    protected $fillable = [
        'formato',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function revistas()
    {
        return $this->hasMany(Revista::class, 'formato_id');
    }
}
