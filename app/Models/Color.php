<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{

  protected $primaryKey = "id";

  protected $Table = "colores";

  protected $fillable = [

    'Nombre_Color'
  ]






    use HasFactory;
}
