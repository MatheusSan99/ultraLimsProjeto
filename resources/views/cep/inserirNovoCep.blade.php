@include('subview.navbar')
@extends('subview.adminHeader')
<head>
    <script src="{{asset('js/dashboard/viacep.js')}}"></script>
</head>
<section id="formulario">
<body>
<!-- Inicio do formulario -->
<form method="POST" action="{{route('salvarCep')}}" id="form" class="p-5">
    @csrf
    <label>Cep:
        <input name="cep" type="text" id="cep" value=""  class="form-control" size="60" maxlength="9"
               onblur="pesquisacep(this.value);" /></label><br />
    <label>Rua:
        <input name="rua" type="text" id="rua"  class="form-control" size="60" /></label><br />
    <label>Bairro:
        <input name="bairro" type="text"  class="form-control" id="bairro" size="60" /></label><br />
    <label>Cidade:
        <input name="cidade" type="text"  class="form-control" id="cidade" size="60" /></label><br />
    <label>Estado:
        <input name="uf" type="text" id="uf"  class="form-control" size="2" /></label><br />
    <label>IBGE:
        <input name="ibge" type="text" id="ibge"  class="form-control" size="8" /></label><br />
    <button type="submit" class="btn bg-success text-light botao-confirma">Salvar Endereço</button>

    </form>
</body>
</section>
