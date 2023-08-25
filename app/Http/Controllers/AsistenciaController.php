<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{

    public function registrarAsistencia(Request $request)
    {
        $asistencia = new Asistencia([
            'alumno_id' => $request->input('alumno_id'),
            'curso_id' => $request->input('curso_id'),
            'fecha_asistencia' => now(),
            'tipo_asistencia' => $request->input('tipo_asistencia'),
        ]);
        $asistencia->save();
        return response()->json($asistencia, 201);
    }
}
