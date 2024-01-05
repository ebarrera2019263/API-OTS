<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $table = 'Direcciones';
    
    protected $fillable = [
        'Numero', 'Nombre', 'Apellido', 'Nit', 'Direccion',
        'Indicacion', 'Pais', 'Departamento',
        'Ciudad', 'Municipio', 'email', 'id_tienda',
    ];
}
