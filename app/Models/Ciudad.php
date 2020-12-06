<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Propietario;

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


}
