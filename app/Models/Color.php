<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vehiculo;

class Color extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';

protected $table = 'colores';

protected $fillable = [
'Nombre_Color'
];

public function vehiculos(){

    return $this->hasMany(Vehiculo::class,'id');
}



}
