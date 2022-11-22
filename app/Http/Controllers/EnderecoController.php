<?php

namespace App\Http\Controllers;

use App\Http\Requests\CepRequestController;
use App\Models\Endereco;
use App\Services\SearchEngine;
use App\Services\TransationMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EnderecoController extends Controller
{
    public function dashboard(Request $request)
    {
        $mensagem = $request->session()->get('message');

        $request->session()->remove('message');

        return view('dashboard', compact('mensagem'));
    }
    public function novoCep()
    {
        return view('cep.inserirNovoCep');
    }

    public function salvarCep(CepRequestController $cepRequestController, TransationMessage $transationMessage)
    {
        $novoCep = $cepRequestController->validated();

        Endereco::create($novoCep);
        $transationMessage->novoCep($cepRequestController);

            return Redirect('/');
    }

    public function listaDeCeps(SearchEngine $searchEngine, Request $request)
    {
        $mensagem = $request->session()->get('message');

        $request->session()->remove('message');

        $enderecos = $searchEngine->search($request);
        return view('cep.listaDeCeps', compact('enderecos','mensagem'));
    }

    public function deletarEndereco(int $id, Endereco $endereco, Request $request, TransationMessage $transationMessage)
    {
        $endereco = $endereco->find($id);

        $endereco->delete();
        $transationMessage->cepApagado($request);
        return Redirect::route('listadeceps');
    }

    public function ordenarBairro(Request $request, SearchEngine $searchEngine)
    {
        $enderecos = $searchEngine->ordenarBairro($request);

        return view('cep.listaDeCeps', compact('enderecos'));
    }

    public function ordenarCidade(Request $request, SearchEngine $searchEngine)
    {
        $enderecos = $searchEngine->ordenarCidade($request);

        return view('cep.listaDeCeps', compact('enderecos'));
    }

    public function ordenarUF(Request $request, SearchEngine $searchEngine)
    {
        $enderecos = $searchEngine->ordenarUF($request);

        return view('cep.listaDeCeps', compact('enderecos'));
    }

    public function apiCeps(Endereco $enderecos, TransationMessage $transationMessage, Request $request)
    {
        set_time_limit(300);
        $novoCep = [];
        $json_data = json_decode(file_get_contents('enderecos.json'));
        foreach ($json_data->enderecos as $endereco) {

            $novoCep[] = [
                'id' => $endereco->endereco->id,
                'cep' => $endereco->endereco->cep,
                'rua' => $endereco->endereco->rua,
                'bairro' => $endereco->endereco->bairro,
                'cidade' => $endereco->endereco->cidade,
                'uf' => $endereco->endereco->uf,
                'ibge' => $endereco->endereco->ibge,
            ];

        }
        for($i = 0; $i< count($novoCep); $i++) {
            Endereco::create($novoCep[$i]);
        }
        set_time_limit(60);

        $transationMessage->listaCarregada($request);

        return Redirect::route('listadeceps');
    }
}
