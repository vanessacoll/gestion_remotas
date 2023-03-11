<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

     protected $table = 'planes';

    protected $fillable = [
        'id_plan',
        'des_plan',
        'updated_at',
        'created_at'
    ];

    protected $primaryKey = 'id_plan';

    public function remota()
    {
        return $this->hasMany('App\Models\Remota', 'id_plan', 'id_plan');
    }

    public function hisremota()
    {
        return $this->hasMany('App\Models\Historico_Remota', 'id_plan', 'id_plan');
    }
}
