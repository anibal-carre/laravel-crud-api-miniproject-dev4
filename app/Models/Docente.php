<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo'];

    // Otras propiedades y relaciones que puedas necesitar

    // Ejemplo de relación si un docente puede tener muchos cursos
    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }
}
