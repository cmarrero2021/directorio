<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vmovilizacion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
    }
    private function modificarArray($array)
    {
        if (array_key_exists('total', $array)) {
            unset($array['total']);
            $array['TOTAL MOVILIZADOS'] = $array['total_movilizados'];
            $array['POR MOVILIZAR'] = $array['total_pormovilizar'];
            unset($array['total_movilizados']);
            unset($array['total_pormovilizar']);
            return $array;
        }
    }

    public function elect_gen_mov() {
        $mov_gen = Vmovilizacion::where('tipo','=','total_electores')
        ->orWhere('tipo','=','total_estudiantes')
        ->orWhere('tipo','=','total_trabajadores')
        ->get();
        return json_encode($mov_gen);
    }
    public function elect_gen_tra() {
        $mov_tra = Vmovilizacion::where('tipo','<>','total_electores')
        ->Where('tipo','<>','total_estudiantes')
        ->Where('tipo','<>','total_trabajadores')
        ->get();
        return json_encode($mov_tra);
    }
}
