<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{

    public function index(){

        $anos = range(date('Y'), date('Y') + 5);
        $anosArray = [];
        $mesesArray = [];
    
        foreach ($anos as $ano) {
            for ($mes = 1; $mes <= 12; $mes++) {
                $data = Carbon::create($ano, $mes, 1);
                $mesNome = $data->locale('pt_BR')->format('F');
    
                if (!in_array($ano, $anosArray)) {
                    $anosArray[] = $ano;
                }
    
                if (!in_array($mesNome, $mesesArray)) {
                    $mesesArray[] = $mesNome;
                }
            }
        }
    
        $anosResponse = response()->json($anosArray);
        $mesesResponse = response()->json($mesesArray);
    
        return view('index', compact('anosResponse', 'mesesResponse'));
    }
    
}
