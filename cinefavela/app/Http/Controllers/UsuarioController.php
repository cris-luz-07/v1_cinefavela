<?php

namespace cinefavela\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller {
    
    public function lista (){
        
        $html = "<h1> Listagem de Usuarios</h1>";
        
        $html .= '<ul>';
        
        $usuarios = DB::select('select * from usuarios');
        
        foreach($usuarios as $p){
            $html .= '<li> Nome : '. $p->login. ', senha: ' . $p->senha . ' </li>';
        }
        
        $html .= '<ul>';
        
        return $html;
    }
}