<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contencion;

class Contencion extends Model
{
    //
    protected $table = 'contenciones';

    protected $fillable = [
        'des_contencion'
    ];

    protected $PK = 'id_contencion';

}