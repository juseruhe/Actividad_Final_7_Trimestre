<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vehiculo;

class Marca extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

protected $table = 'marcas';

protected $fillable = [
'Nombre_Marca'
];

public function vehiculos(){

    return $this->hasMany(Vehiculo::class,'id');
}
}
