<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Revista;
use App\Models\Vrevista;
use App\Models\Editorial;
use App\Models\Formato;
use App\Models\Periodicidad;
use App\Models\Indice;
use App\Models\AreaConocimiento;
use App\Models\Idioma;
use App\Models;
use Barryvdh\DomPDF\Facade\Pdf;

class RevistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $revistas = Vrevista::all();
        return view('revistas.index', compact('revistas'));
    }
    public function rev_tabla(Request $request)
    {
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $user = Auth::user();
        $query = Vrevista::query();
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($query) use ($user, $search) {
                $query
                    ->orWhere('id', 'Ilike', '%' . $search . '%')
                    ->orWhere('revista', 'Ilike', '%' . $search . '%')
                    ->orWhere('area_conocimiento', 'Ilike', '%' . $search . '%')
                    ->orWhere('editorial', 'Ilike', '%' . $search . '%')
                    ->orWhere('indice', 'Ilike', '%' . $search . '%')
                    ->orWhere('idioma', 'Ilike', '%' . $search . '%')
                    ->orWhere('periodicidad', 'Ilike', '%' . $search . '%')
                    ->orWhere('formato', 'Ilike', '%' . $search . '%')
                    ->orWhere('deposito_legal_impreso', 'Ilike', '%' . $search . '%')
                    ->orWhere('deposito_legal_digital', 'Ilike', '%' . $search . '%')
                    ->orWhere('issn_impreso', 'Ilike', '%' . $search . '%')
                    ->orWhere('issn_digital', 'Ilike', '%' . $search . '%')
                    ->orWhere('url', 'Ilike', '%' . $search . '%')
                ;
            });
        }
        // if ($request->has('filter')) {
        //     $filters = json_decode($request->filter, true);
        //     foreach ($filters as $column => $value) {
        //         $query->where($column, 'like', '%' . $value . '%');
        //     }
        // }
        $total = $query->count();
        if ($request->has('limit')) {
            $trabajadores = $query->skip($offset)->take($limit)->get();
        } else {
            $trabajadores = $query->get();
        }
        return response()->json([
            'total' => $total,
            'rows' => $trabajadores
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $revista = Vrevista::findOrFail($id);
        return response()->json([
            'revista' => $revista
        ]);
    }
    public function generarPDF($id)
    {
        $revista = Vrevista::findOrFail($id);
        $pdf = Pdf::loadView('revistas.revista_pdf', compact('revista'));
        return $pdf->download('revista_' . $revista->revista . '.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $revista = Vrevista::findOrFail($id);
        return response()->json([
            'revista' => $revista
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'revistaEdt' => 'required|string|max:50',
            'urlEdt' => 'required|url',
            'anio_inicialEdt' => 'required|integer|min:1800|max:' . date('Y'),
            'indiceEdt' => 'required|integer',
            'editorialEdt' => 'required|integer',
            'area_conocimientoEdt' => 'required|integer',
            'idiomaEdt' => 'required|integer',
            'periodicidadEdt' => 'required|integer',
            'descripcionEdt' => 'required',
            'formato' => 'required|in:1,2,3',
            'deposito_legal_impresoEdt' => [
                'nullable', 
                'string', 
                'max:255',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->input('formato') == 1 && empty($value)) {
                        $fail('El depósito legal impreso es requerido cuando el formato es impreso.');
                    }
                    if ($request->input('formato') == 2 && !empty($value)) {
                        $fail('El depósito legal impreso debe estar vacío cuando el formato es digital.');
                    }
                    if ($request->input('formato') == 3 && empty($value)) {
                        $fail('El depósito legal impreso es requerido cuando el formato es mixto.');
                    }
                }
            ],
            'deposito_legal_digitalEdt' => [
                'nullable', 
                'string', 
                'max:255',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->input('formato') == 1 && !empty($value)) {
                        $fail('El depósito legal impreso debe estar vacío cuando el formato es digital.');
                    }                    
                    if ($request->input('formato') == 2 && empty($value)) {
                        $fail('El depósito legal digital es requerido cuando el formato es 2.');
                    }
                    if ($request->input('formato') == 3 && empty($value)) {
                        $fail('El depósito legal digital es requerido cuando el formato es 3.');
                    }
                }
            ],
            'issn_impresoEdt' => [
                'nullable', 
                'string', 
                'max:255',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->input('formato') == 1 && empty($value)) {
                        $fail('El ISSN impreso es requerido cuando el formato es impreso.');
                    }
                    if ($request->input('formato') == 2 && !empty($value)) {
                        $fail('El ISSN impreso debe estar vacío cuando el formato es digital.');
                    }
                    if ($request->input('formato') == 3 && empty($value)) {
                        $fail('El ISSN impreso es requerido cuando el formato es mixto.');
                    }
                }
            ],
            'issn_digitalEdt' => [
                'nullable', 
                'string', 
                'max:255',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->input('formato') == 1 && !empty($value)) {
                        $fail('El ISSN impreso debe estar vacío cuando el formato es digital.');
                    }                    
                    if ($request->input('formato') == 2 && empty($value)) {
                        $fail('El ISSN digital es requerido cuando el formato es digital.');
                    }
                    if ($request->input('formato') == 3 && empty($value)) {
                        $fail('El ISSN digital es requerido cuando el formato es mixto.');
                    }
                }
            ],
            'correo_revistaEdt' => 'nullable|email|max:255',
            'correo_editorEdt' => 'nullable|email|max:255',
        ], [
            'revistaEdt.required' => 'El campo revista es obligatorio.',
            'urlEdt.required' => 'El campo URL es obligatorio.',
            'urlEdt.url' => 'La URL no es válida.',
            'anio_inicialEdt.required' => 'El campo año inicial es obligatorio.',
            'anio_inicialEdt.integer' => 'El año inicial debe ser un número entero.',
            'anio_inicialEdt.min' => 'El año inicial debe ser al menos 1800.',
            'anio_inicialEdt.max' => 'El año inicial no puede ser mayor que el año actual.',
            "indiceEdt.integer" => "El campo índices es obligatorio",
            "area_conocimientoEdt.integer" => "El campo áreas de conocimiento es obligatorio",
            "idiomaEdt.integer" => "El campo idiomas es obligatorio",
            "periodicidadEdt.integer" => "El campo periodicidad es obligatorio",
            "editorialEdt.integer" => "El campo editorial es obligatorio",
            "descripcionEdt.required" => "El campo resúmen es obligatorio",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 202);
        } 
        $revista = Revista::findOrFail($id);
        $revista->revista = filter_var($request->input('revistaEdt'), FILTER_SANITIZE_STRING);
        $revista->url = filter_var($request->input('urlEdt'), FILTER_SANITIZE_URL);
        $revista->anio_inicial = filter_var($request->input('anio_inicialEdt'), FILTER_SANITIZE_NUMBER_INT);
        $revista->indices_id = filter_var($request->input('indiceEdt'), FILTER_SANITIZE_STRING);
        $revista->editorial_id = filter_var($request->input('editorialEdt'), FILTER_SANITIZE_STRING);
        $revista->area_conocimiento_id = filter_var($request->input('area_conocimientoEdt'), FILTER_SANITIZE_STRING);
        $revista->lenguajes_id = filter_var($request->input('idiomaEdt'), FILTER_SANITIZE_STRING);
        $revista->periodicidad_id = filter_var($request->input('periodicidadEdt'), FILTER_SANITIZE_STRING);
        $revista->resumen = filter_var($request->input('descripcionEdt'), FILTER_SANITIZE_STRING);
        $revista->deposito_legal_impreso = filter_var($request->input('deposito_legal_impresoEdt'), FILTER_SANITIZE_STRING);
        $revista->deposito_legal_digital = filter_var($request->input('deposito_legal_digitalEdt'), FILTER_SANITIZE_STRING);
        $revista->issn_impreso = filter_var($request->input('issn_impresoEdt'), FILTER_SANITIZE_STRING);
        $revista->issn_digital = filter_var($request->input('issn_digitalEdt'), FILTER_SANITIZE_STRING);
        $revista->correo_revista = filter_var($request->input('correo_revistaEdt'), FILTER_SANITIZE_EMAIL);
        $revista->correo_editor = filter_var($request->input('correo_editorEdt'), FILTER_SANITIZE_EMAIL);
        $revista->portada = filter_var($request->input('portada'), FILTER_SANITIZE_EMAIL);
        $revista->save();
        return response()->json([
            'success' => true,
            'message' => 'La revista ha sido actualizada exitosamente.',
            'revista' => $revista,
        ]);
    }
    public function portada(Request $request)
    {
        if ($request->hasFile('portada')) {
            $portada = $request->file('portada');
            $nombreArchivo = time() . '.' . $portada->getClientOriginalExtension();
            $portada->move(public_path('portadas'), $nombreArchivo);
            $pepe = 
                response()->json([
                    'portada' => $nombreArchivo,
                    'success' => true,
                ]);                 
            return response()->json([
                'portada' => $nombreArchivo,
                'success' => true,
            ]);    
            // $revista = Revistas::find($request->id);
            // $revista->portada = 'portadas/' . $nombreArchivo; // Guarda la ruta relativa
            // $revista->save();
        }
    
        // Resto del código para actualizar otros campos
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function auxiliares()
    {
        $indices = Indice::select('id', 'indice as valor')
            ->orderBy('indice', 'asc')
            ->get()
            ->map(function ($item) {
                $item->indice = strtolower($item->indice);
                // $item->indice = ucfirst(mb_strtolower($item->indice));
                return $item;
            });
        $areas_conocimiento = AreaConocimiento::select('id', 'area_conocimiento as valor')
            ->orderBy('area_conocimiento', 'asc')
            ->get()
            ->map(function ($item) {
                $item->area_conocimiento = ucfirst(mb_strtolower($item->area_conocimiento));
                return $item;
            });
        $idiomas = Idioma::select('id', 'idioma as valor')
            ->orderBy('id', 'asc')
            ->get()
            ->map(function ($item) {
                $item->idioma = ucfirst(mb_strtolower($item->idioma));
                return $item;
            });
        $periodicidades = Periodicidad::select('id', 'periodicidad as valor')
            ->orderBy('periodicidad', 'asc')
            ->get()
            ->map(function ($item) {
                $item->periodicidad = ucfirst(mb_strtolower($item->periodicidad));
                return $item;
            });
        $formatos = Formato::select('id', 'formato as valor')
            ->orderBy('formato', 'asc')
            ->get()
            ->map(function ($item) {
                $item->formato = ucfirst(mb_strtolower($item->formato));
                return $item;
            });
        $editoriales = Editorial::select('id', 'editorial as valor')
            ->orderBy('editorial', 'asc')
            ->get()
            ->map(function ($item) {
                $item->editorial = ucfirst(mb_strtolower($item->editorial));
                return $item;
            });
        $data = [
            'indices' => $indices,
            'areas_conocimiento' => $areas_conocimiento,
            'idiomas' => $idiomas,
            'periodicidades' => $periodicidades,
            'formatos' => $formatos,
            'editoriales' => $editoriales,
        ];
        return json_encode($data);
    }
}
