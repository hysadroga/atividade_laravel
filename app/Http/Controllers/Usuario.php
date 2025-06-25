<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        echo '<marquee>Usuario conectado</marquee>';
    }
    function desconectar(){
        echo '<strong>Usuario desconectado</strong>';
    }
}
