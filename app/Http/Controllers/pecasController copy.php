<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $nomepeca= "Rolamento";
        return view('peca', ['nomepeca'=>$nomepeca ]);
    }
}
