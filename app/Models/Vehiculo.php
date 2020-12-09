<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Color;

use App\Models\Marca;

use App\Models\Tipo_Vehiculo;

use App\Models\Conductor;

use App\Models\Propietario;

class Vehiculo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

protected $table = 'vehiculos';

protected $fillable = [
'Placa','Color_id','Marca_id','Tipo_Vehiculo_id','Conductor_id',
'Propietario_id',
];

public function color(){

return $this->belongsTo(Color::class,'Color_id');

}

public function marca(){

return $this->belongsTo(Marca::class,'Marca_id');

}

public function tipo_vehiculo(){


    return $this->belongsTo(Tipo_Vehiculo::class,'Tipo_Vehiculo_id');
    

}

public function conductor(){

    return $this->belongsTo(Conductor::class,'Conductor_id');

}

public function propietario(){

    return $this->belongsTo(Propietario::class,'Propietario_id');
}



}
