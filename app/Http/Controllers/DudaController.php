<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duda;
use Illuminate\Support\Facades\Storage;

class DudaController extends Controller{
    
    public function create(){

    $modulos = [
        'Desarrollo Web en Entorno Servidor',
        'Desarrollo Web en Entorno Cliente',
        'Despliegue de Aplicaciones Web',
        'Empresa e Iniciativa Emprendedora',
        'Diseño de Interfaces Web',
    ];

    return view('welcome', compact('modulos'));
}



    public function index()
    {
        $dudas = Duda::all();
        return view('dudas.index', compact('dudas'));
    }


    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'correo' => 'required|email',
            'modulo' => 'required|string',
            'asunto' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        // Crear la instancia de Duda
        $duda = Duda::create($request->all());

        // Datos a escribir en el CSV
        $csvData = [
            '"' . $duda->correo . '"',
            '"' . $duda->modulo . '"',
            '"' . $duda->asunto . '"',
            '"' . $duda->descripcion . '"'
        ];
        
        // Ruta del archivo CSV
        $csvFile = storage_path('app/dudas.csv');

        // Verificar si el archivo existe
        if (!file_exists($csvFile)) {
            // Si no existe, crea el archivo y agrega los encabezados
            file_put_contents($csvFile, "correo;modulo;asunto;descripcion\n");
        }

        // Escribir los datos en el archivo CSV
        file_put_contents($csvFile, implode(';', $csvData) . "\n", FILE_APPEND);

        // Redirigir a una página de éxito
        return redirect()->route('duda.create')->with('success', 'Los datos se han registrado correctamente.');
    
        DB::table('dudas')->insert([
            'email' => $validatedData['email'],
            'modulo' => $validatedData['modulo'],
            'asunto' => $validatedData['asunto'],
            'descripcion' => $validatedData['descripcion'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect()->back()->with('success', 'Duda enviada correctamente.');
    

    }

}