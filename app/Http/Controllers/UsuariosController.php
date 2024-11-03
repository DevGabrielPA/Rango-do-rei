<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function index(){

        $usuarios = Usuarios::all();
        
        return response()->json($usuarios);
    }
}
