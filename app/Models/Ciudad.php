<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Propietario;

use App\Models\Conductor;

class Ciudad extends Model
{
    use HasFactory;

protected $primaryKey = 'id';

protected $table = 'ciudades';

protected $fillable = [
'Nombre_Ciudad'
];

public function propietarios(){

    return $this->hasMany(Propietario::class,'id');
}


public function conductores(){

    return $this->hasMany(Conductor::class,'id');
}

}
