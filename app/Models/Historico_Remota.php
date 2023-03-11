<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico_Remota extends Model
{
    use HasFactory;

     protected $table = 'historico_remotas';

    protected $fillable = [
        'id_remota',
        'id_cliente',
        'id_plan',
        'id_contencion',
        'id_satelite',
        'nombre',
        'serial',
        'modmodem',
        'localidad',
        'direccion',
        'coordenadas',
        'tip_antena',
        'antena',
        'buc',
        'lnb',
        'id_just',
        'id_hist',
        'username',
        'id_status',
        'updated_at',
        'created_at'
        ];

          protected $primaryKey = 'id_hist';

     public function justificacion()
    {
        return $this->belongsTo('App\Models\Justificacion', 'id_just', 'id_just');
    }

    public function cliente()
    {
       return $this->belongsTo('App\Models\Cliente', 'id_cliente', 'id_cliente');
    }

    public function plan()
    {
       return $this->belongsTo('App\Models\Plan', 'id_plan', 'id_plan');
    }

    public function contencion()
    {
       return $this->belongsTo('App\Models\Contencion', 'id_contencion', 'id_contencion');
    }

    public function satelite()
    {
       return $this->belongsTo('App\Models\Satelite', 'id_satelite', 'id_satelite');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'id_status', 'id_status');
    }
}
