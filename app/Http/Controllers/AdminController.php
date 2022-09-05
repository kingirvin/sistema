<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function gastos(){
        return view('gastos.gastos');
    }
    public function usuarios(){
        return view('administrador.usuarios');
    }
    public function cuentas(){
        return view('cuentas.cuentas');
    }
}
