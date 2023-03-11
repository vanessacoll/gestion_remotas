<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    use HasFactory;

    protected $table = 'adm_status';
    public $timestamps = false;

    protected $fillable = [
        'id_status',
        'des_status',
       ];

    protected $primaryKey = 'id_status';

    public function cliente()
    {
       return $this->hasMany('App\Models\Cliente', 'id_status', 'id_status');
    }

    public function remota()
    {
       return $this->hasMany('App\Models\Remota', 'id_status', 'id_status');
    }

    public function hisremota()
    {
       return $this->hasMany('App\Models\Historico_Remota', 'id_status', 'id_status');
    }


}
