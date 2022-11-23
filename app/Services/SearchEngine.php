<?php

namespace App\Services;

use App\Models\Endereco;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SearchEngine
{
    public function search(Request $request)
    {
        $enderecos = Endereco::query();

        $enderecos->when($request->search, function ($query, $campoDePesquisa){
            $query->where('cep', 'like', '%' . $campoDePesquisa . '%')->orWhere('uf', 'like', '%' . $campoDePesquisa . '%')->orWhere('cidade','like', '%' . $campoDePesquisa . '%');
        });

        return $enderecos->paginate(5);
    }

    public function ordenarBairro(Request $request)
    {
        $enderecos = Endereco::query();

        $enderecos->when($request->search, function ($query, $campoDePesquisa){
            $query->where('cep', 'like', '%' . $campoDePesquisa . '%')->orWhere('uf', 'like', '%' . $campoDePesquisa . '%')->orWhere('cidade','like', '%' . $campoDePesquisa . '%');
        });

        return $enderecos->orderBy('bairro')->paginate(5);
    }
    public function ordenarCidade(Request $request)
    {
        $enderecos = Endereco::query();

        $enderecos->when($request->search, function ($query, $campoDePesquisa){
            $query->where('cep', 'like', '%' . $campoDePesquisa . '%')->orWhere('uf', 'like', '%' . $campoDePesquisa . '%')->orWhere('cidade','like', '%' . $campoDePesquisa . '%');

        });

        return $enderecos->orderBy('cidade')->paginate(5);
    }
    public function ordenarUF(Request $request)
    {
        $enderecos = Endereco::query();
        $enderecos->when($request->search, function ($query, $campoDePesquisa){
            $query->where('cep', 'like', '%' . $campoDePesquisa . '%')->orWhere('uf', 'like', '%' . $campoDePesquisa . '%')->orWhere('cidade','like', '%' . $campoDePesquisa . '%');

        });
        return $enderecos->orderBy('uf')->paginate(5);

    }
}
