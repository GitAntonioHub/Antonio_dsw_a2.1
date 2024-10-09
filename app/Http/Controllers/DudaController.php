<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duda;

class DudaController extends Controller
{
    public function create()
    {
        $modulos = [
            'Desarrollo Web en Entorno Servidor',
            'Desarrollo Web en Entorno Cliente',
            'Despliegue de Aplicaciones Web',
            'Empresa e Iniciativa Emprendedora',
            'Diseño de Interfaces Web',
        ];

        return view('dudas.create', compact('modulos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'modulo' => 'required',
            'asunto' => 'required|max:255',
            'descripcion' => 'required',
        ]);

        Duda::create($request->all());

        return redirect()->back()->with('success', 'Tu duda ha sido enviada correctamente.');
    }
}
