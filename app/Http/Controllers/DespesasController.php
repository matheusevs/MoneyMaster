<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DespesasRequest;
use App\Models\Despesas;
use Exception;

class DespesasController extends Controller
{
    public function create(DespesasRequest $request){

        try{

            $despesas = new Despesas();

            foreach ($request->all() as $key => $value) {

                if($key != '_token'){
                    $despesas[$key] = $value;
                }
                
            }
            
            $despesas->save();

            return response()->json([
                'message' => 'Despesa criada'
            ], 200);

        } catch(Exception $e){

            return response()->json([
                'message' => $e->getMessage(),
            ]);

        }
    }
}
