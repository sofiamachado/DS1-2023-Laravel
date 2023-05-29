<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;

class MyController extends Controller
{

    public function getValor()
    {
        $myModel = new Casa;
        $Casa = $myModel->all();
        return $Casa;
    }
     public function geraMyHome( Request $request){
        $valor_created = Casa::all();
       return view('home', ['selecoes' => $valor_created]);
     }

    public function novosDados()
    {
        return view('addDados');
    }

     public function geraSalvaDados( Request $request)
     {
        $valor = $request->all();
        $myModel = new Casa;
        $myModel -> imobiliaria = $valor['imobiliaria'];
        $myModel -> endereco = $valor['endereco'];
        $myModel -> preco = $valor['preco'];
        $myModel -> status = $valor['status'];
        $myModel-> save();
        return redirect('/');
   }

    public function deletaDados ($id)
    {
        Casa::find($id)->delete();
        return redirect('/');
    }
    
    public function editaCasa ($id) {
        $casa = Casa::find($id);
        return view('editaCasa', ['casa' => $casa]);
    }
    public function editaDados($id, Request $request)
    {
        if ($request->imobiliaria) Casa::find($id)->update(['imobiliaria' => $request->imobiliaria]);
        if ($request->endereco) Casa::find($id)->update(['endereco' => $request->endereco]);
        if ($request->preco) Casa::find($id)->update(['preco' => $request->preco]);
        if ($request->status) Casa::find($id)->update(['status' => $request->status]);
        return redirect('/');
    }

}

?>