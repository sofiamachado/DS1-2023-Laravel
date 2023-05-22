<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comida;

class MyController extends Controller
{
    public function geraTela()
    {
        return view('tela');
    }

    public function geraWelcome()
    {
        return view('welcome');
    }

    public function getValor()
    {
        $myModel = new Comida;
        $comida = $myModel->all();
        return $comida;
    }
     public function geraMyHome( Request $request){
        $valor = $request->all();
        $valor_created = $this->getValor();
        
        return view('myHomeView', ['name' => $valor['email'], 'senha' => $valor['password'], 'selecoes' => $valor_created]);
     }

     public function gerasalvaDados( Request $request)
     {
        $valor = $request->all();
        $myModel = new Comida;
        $myModel -> nome = $valor['nome'];
        $myModel -> pais = $valor['pais'];
        $myModel -> chefe = $valor['chefe'];
        $myModel -> qtd = $valor['qtd'];
        $myModel-> save();
   }

    public function mostraDados (){
        return view('salvaDados');
     }

    public function deletaDados(Request $request)
    {
        return view('deletaDados');
    }



}

?>