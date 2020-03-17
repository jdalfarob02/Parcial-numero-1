<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supermercado extends Model
{
    protected $table = 'supermerados';

    protected $fillable = [
        'supermercado', 'caja', 'factura_id',

    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    //campo booleano 
    protected $casts = [
        'caja' => 'array',
    ];

    public function factura()
    {
        return $this->belongsTo(App\Models\Factura);
    }

    
    
}
