<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Vrevista;

class RevistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $revistas = Vrevista::all();
        return view('revistas.index',compact('revistas'));
    }
    public function rev_tabla(Request $request)
    {
        \Log::info($request->all());
        $offset = $request->input('offset', 0);
        $limit = $request->input('limit', 10);
        $user = Auth::user();
        $query = Vrevista::query();
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($query) use ($user,$search) {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
