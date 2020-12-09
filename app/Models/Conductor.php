<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vehiculo;

use App\Models\Ciudad;

class Conductor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

protected $table = 'conductores';

protected $fillable = [
'Numero_Cedula','Primer_Nombre','Segundo_Nombre','Apellidos','Direccion',
'Telefono','Ciudad_id'
];

public function ciudad(){

    return  $this->belongsTo(Ciudad::class,'Ciudad_id');
 }
 

 public function vehiculos(){

    return $this->hasMany(Vehiculo::class,'id');
}

}
