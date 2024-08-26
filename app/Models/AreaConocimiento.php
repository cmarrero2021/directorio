<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaConocimiento extends Model
{
    use SoftDeletes;

    protected $table = 'areas_conocimiento';

    protected $fillable = [
        'area_conocimiento',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function revistas()
    {
        return $this->hasMany(Revista::class, 'area_conocimiento_id');
    }
}
