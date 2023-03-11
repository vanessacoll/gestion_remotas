<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'id_cliente',
        'cedula',
        'nombres',
        'direccion',
        'telefono',
        'email',
        'id_status',
        'id_tipcli',
        'updated_at',
        'created_at'
    ];

    protected $primaryKey = 'id_cliente';

    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'id_status', 'id_status');
    }

    public function tip_cliente()
    {
        return $this->belongsTo('App\Models\Tip_cliente', 'id_tipcli', 'id_tip');
    }

    public function hisremota()
    {
        return $this->hasMany('App\Models\Historico_Remota', 'id_cliente', 'id_cliente');
    }

    public function remota()
    {
       return $this->hasMany('App\Models\Remota', 'id_cliente', 'id_cliente');
    }

}
