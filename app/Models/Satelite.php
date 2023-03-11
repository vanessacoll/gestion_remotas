<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satelite extends Model
{
    use HasFactory;

     protected $table = 'satelites';

    protected $fillable = [
        'id_satelite',
        'des_satelite',
        'ubicacion_azi',
        'ubicacion_ele',
        'ubicacion_pol',
        'updated_at',
        'created_at'
    ];

    protected $primaryKey = 'id_satelite';

    public function remota()
    {
        return $this->hasMany('App\Models\Remota', 'id_satelite', 'id_satelite');
    }

    public function hisremota()
    {
        return $this->hasMany('App\Models\Historico_Remota', 'id_satelite', 'id_satelite');
    }
}
