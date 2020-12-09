<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Vehiculo;

class Tipo_Vehiculo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'Tipo_Vehiculos';
    
    protected $fillable = [
    'Nombre_Tipo_Vehiculo'
    ];


    public function vehiculos(){

        return $this->hasMany(Vehiculo::class,'id');
    }

}
