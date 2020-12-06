<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    
protected $primaryKey = 'id';

protected $table = 'propietarios';

protected $fillable = [
'Primer_Nombre','Segundo_Nombre','Apellidos','Direccion','Telefono','Ciudad_id'
];
}
