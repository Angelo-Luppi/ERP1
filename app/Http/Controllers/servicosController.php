<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $nomecliente= "Bianca Bogoni";
        return view('servico', ['nomecliente'=>$nomecliente ]);
    }
}
