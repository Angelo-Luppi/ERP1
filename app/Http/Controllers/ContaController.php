<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Cont;

class ContaController extends Controller
{
    public function index(){
        $nomecliente = "Troca de pneu";
        return view('conta', ['nomecliente'=>$nomecliente ]);
    }
}
