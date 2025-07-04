<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietarioModel;

class ProprietarioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
    }
    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $proprietario = new ProprietarioModel();
            $proprietario->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $proprietario = ProprietarioModel::find($dados->id); //localiza o registro
            $update = $proprietario->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $proprietario = ProprietarioModel::all();
        
        //após adicionar ou editar redireciona para a página listar
        return view('proprietario-listar', ['proprietario'=>$proprietario]);
    } 

    function list(){
        $proprietario = ProprietarioModel::all();
        return view('proprietario-listar',['proprietario' => $proprietario]);
    }

    function remove($id){
        ProprietarioModel::destroy($id);

        return redirect()->route('proprietario-list');
    }  
    function edit($id){
        $proprietario = ProprietarioModel::find($id);

    return view('proprietario-formulario', ['proprietario' => $proprietario]);
    //vamos enviar o $veiculo que veio do BD para a página veiculo-formulario
    }
}
