<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip_Cliente extends Model
{
    use HasFactory;

    protected $table = 'tip_clientes';
    public $timestamps = false;

    protected $fillable = [
        'id_tip',
        'des_tip',
       ];

    protected $primaryKey = 'id_tip';

    public function cliente()
    {
       return $this->hasMany('App\Models\Cliente', 'id_tip', 'id_tipcli');
    }
}
