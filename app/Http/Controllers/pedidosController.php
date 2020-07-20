<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

         $validator = \Validator::make($request->all(), [
            'pedidos_nome' => 'required',
            'pedido_numero' => 'required',
            'pedido_qtda' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $goalscorer= new pedidosController();
        $goalscorer->pedidos_nome=$request->get('pedidos_nome');
        $goalscorer->pedido_numero=$request->get('pedido_numero');
        $goalscorer->pedido_qtda=$request->get('pedido_qtda');
        $goalscorer->save();
   
        return response()->json(['success'=>'Data is successfully added']);
    }
}
