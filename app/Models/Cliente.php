<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'Nom_cliente', 'correo', 'telefono'

    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    //accesorio
    public function getNombreCorreoAtribute() {
        return "{$this->Nom_cliente} {$this->email}";

    }

    public function facturas()
    {
        return $this->hasMany(App\Models\Factura);
    }
    
    

}
