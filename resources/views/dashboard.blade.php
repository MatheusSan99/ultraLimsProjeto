@extends('subview.adminHeader')
@section('adminDashboard')
    @include('subview.navbar')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="/" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white"><a href="">Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            @if(!empty($mensagem))
                <div class="text-white alert alert-success bg-success text-center">{{$mensagem}}</div>
            @endif
            <div class="alert-button">
                <a href={{route('novoCep')}}><button class="button-alert-admin">Consultar Cep</button></a>
            </div>
            <div class="alert-button">
                <a href="{{route('listadeceps')}}"><button class="button-alert-admin">Lista de Endereços</button></a>
            </div>
                <form enctype="multipart/form-data"
                      method="POST"
                      action="{{route('apiCeps')}}">
                    @csrf
                    <div class="alert-button">
                        <button class="button-alert-admin" type="submit">Importar Ceps via JSON</button>
                    </div>
                </form>
        </section>
    </main>
@endsection
