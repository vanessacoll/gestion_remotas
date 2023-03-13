<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificacion extends Model
{
    use HasFactory;

    protected $table = 'justificaciones';
    public $timestamps = false;

    protected $fillable = [
        'id_just',
        'des_just',
       ];

    protected $primaryKey = 'id_just';

    public function hisremota()
    {
        return $this->hasMany('App\Models\Historico_Remota', 'id_just', 'id_just');
    }
}
