<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contencion extends Model
{
	  use HasFactory;
	  
      protected $table = 'contenciones';

    protected $fillable = [
        'id_contencion',
        'des_contencion',
        'updated_at',
        'created_at'
    ];

    protected $primaryKey = 'id_contencion';

    public function remota()
    {
        return $this->hasMany('App\Models\Remota', 'id_contencion', 'id_contencion');
    }

    public function hisremota()
    {
        return $this->hasMany('App\Models\Historico_Remota', 'id_contencion', 'id_contencion');
    }

}
