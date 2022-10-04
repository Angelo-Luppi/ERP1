<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = "Troca de pneu";
        return view('clientes', ['clientes'=>$clientes ]);
    }
}
