<?php

namespace App\Services;

use Illuminate\Http\Request;

class TransationMessage
{
    public function novoCep(Request $request)
    {
        $request->session()
            ->flash(
                'message',
                "Novo Cep Adicionado Corretamente no Banco de Dados"
            );
    }

    public function listaCarregada(Request $request)
    {
        $request->session()
            ->flash(
                'message',
                "Você carregou corretamente os ceps via JSON"
            );
    }
    public function cepApagado(Request $request)
    {
        $request->session()
            ->flash(
                'message',
                "Você apagou um registro"
            );
    }

}
