<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodicidad extends Model
{
    use SoftDeletes;

    protected $table = 'periodicidad';

    protected $fillable = [
        'periodicidad',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function revistas()
    {
        return $this->hasMany(Revista::class, 'periodicidad_id');
    }
}
