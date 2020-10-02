<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaPivot extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'descripcion', 'valor_unitario','IVA'
    ];
    
}
