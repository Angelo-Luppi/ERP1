<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $nomecliente = "Troca de pneu";
        return view('cliente', ['nomecliente'=>$nomecliente ]);
    }
}
