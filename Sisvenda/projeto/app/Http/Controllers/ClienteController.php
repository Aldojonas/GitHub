<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function show(){
        $clientes = Clientes::all();
        echo $clientes;
    }
}
