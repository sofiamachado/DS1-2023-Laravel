<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;

class MyController extends Controller
{
    public function geraMyHome(Request $request){
        $search = $request->input('search', '');
        $ordem = $request->input('ordem', 'id');
        $status = $request->input('status', '');
        $selecoes = Casa::where('imobiliaria', 'LIKE', "%$search%")->orWhere('endereco', 'LIKE', "%$search%")->orderBy($ordem, 'ASC')->get();
        if($status != '') $selecoes = $selecoes->where('status', '=', $status);
        $maisCara = $selecoes->sortByDesc('preco')->first()->id;
        return view('home', compact('selecoes', 'search', 'ordem', 'status', 'maisCara'));
    }

    public function novosDados() 
    {
        return view('addDados');
    }

     public function geraSalvaDados(Request $request)
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
        $casa = Casa::find($id);
        if ($request->imobiliaria) $casa->update(['imobiliaria' => $request->imobiliaria]);
        if ($request->endereco) $casa->update(['endereco' => $request->endereco]);
        if ($request->preco) $casa->update(['preco' => $request->preco]);
        if ($request->status) $casa->update(['status' => $request->status]);
        return redirect('/');
    }

}

?>