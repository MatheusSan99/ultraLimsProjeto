@extends('subview.adminHeader')
@include('subview.navbar')
@section('search')
    <div class="search-bar p-3 ">
        <form class="search-form d-flex align-items-center" method="GET" autocomplete="off">
            <input type="text" name="search" placeholder="Pesquisar Endereço, (CEP, UF E CIDADE)" title="Procurar Médico"><button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
@endsection
<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                @if(!empty($mensagem))
                    <div class="text-white alert alert-success bg-success text-center">{{$mensagem}}</div>
                @endif
                <h5 class="card-title text-center">Lista de Endereços</h5>
                    <form method="get">
                        @csrf
                <table class="table table-striped table-hover table-scrollable">
                    <thead>
                    <tr>
                        <th scope="col">Cep</th>
                        <th scope="col">Rua</th>
                        <th scope="col"><button class="botao-de-ordenar" type="submit" formaction="{{route('ordenarBairro', $bairro = true)}}">Ordenar Bairro</button></th>
                        <th scope="col"><button class="botao-de-ordenar" type="submit" formaction="{{route('ordenarCidade')}}">Ordenar Cidade</button></th>
                        <th scope="col"><button  class="botao-de-ordenar" type="submit" formaction="{{route('ordenarUF', $uf = 'ordenado')}}">Ordenar UF</button></th>
                        <th scope="col">IBGE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($enderecos as $endereco)
                        <tr>
                            <td>{{ $endereco->cep }}</td>
                            <td>{{ $endereco->rua }}</td>
                            <td>{{ $endereco->bairro }}</td>
                            <td>{{ $endereco->cidade }}</td>
                            <td>{{ $endereco->uf }}</td>
                            <td>{{ $endereco->ibge }}</td>

                            <form method="POST" action="{{route('deletarEndereco', $endereco->id)}}" onsubmit="return confirm('Deseja Remover {{addslashes($endereco->name)}}? Esta ação não poderá ser desfeita.')">
                                @method('DELETE')
                                @csrf
                                <td>
                                    <button type="submit" class="border-0"><img src="{{asset('img/icone/recicle-bin.png')}}" width="20px" alt="apagar item">
                                    </button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                    </form>
            </div>
        </div>
    </div>
</section>
<div class="pagination-links">
    {{ $enderecos->links() }}
</div>
