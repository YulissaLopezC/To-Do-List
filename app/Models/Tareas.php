<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $fillable = ['name', 'descripcion', 'dia', 'imagen'];
    use HasFactory;

}
