<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $fillable = [
        'articulo', 'precio', 'descuento', 'cliente_id'

    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    //campo booleano 
    protected $casts = [
        'descuento' => 'boolean',
    ];

    //mutador
    public function setArticuloAttribute($value)
    {
        $this->attributes['articulo'] = ucwords($value);
    }

    public function cliente()
    {
        return $this->belongsTo(App\Models\Cliente);
    }

    public function supermercados()
    {
        return $this->hasMany(App\Models\Supermercado);
    }
    
    
    protected $appends = [
            'cliente_id'
    ];

    

    
    
}
