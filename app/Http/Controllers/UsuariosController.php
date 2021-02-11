<?php

namespace App\Http\Controllers;
//1º passo - importar a model
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        // Instanciar a classe
        $usuarios = new Usuario();
        // passando para a views a variavel usuarios
        return view('usuarios.list',['usuarios'=>$usuarios]);
    }
}
