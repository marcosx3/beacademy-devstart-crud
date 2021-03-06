@extends('template.template')

@section('title')
    Cadastro de Produtos
@endsection


@section('content')
    <div class="container-fluid d-flex justify-content-center mb-3 mt-3">
        <h1>Cadastro de Produto</h1>
    </div>
    <div class="container form-cadastro-produtos">
        <form action="/produtos/cadastro" method="post">
            @csrf
            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <fieldset>
                        <legend>Informações</legend>
                        <div class="form-info">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" id="name" class="form-control">


                            <label for="gender" class="form-label">Gênero</label>
                            <input type="text" name="gender" id="gender" class="form-control">

                            <label for="developer" class="form-label">Desenvolvedor(a)</label>
                            <input type="text" name="developer" id="developer" class="form-control">


                            <label for="distributor" class="form-label">Distribuidor(a)</label>
                            <input type="text" name="distributor" id="distributor" class="form-control">


                            <label for="launch" class="form-label">Data de Lançamento</label>
                            <input type="date" name="launch" id="launch" class="form-control">
                        </div>
                    </fieldset>
                </div>
                <div class="col">
                    <fieldset>
                        <legend>Requisitos Minimos</legend>
                        <div class="form-req">
                            <label for="so" class="form-label">Sistema Operacional</label>
                            <input type="text" name="so" id="so" class="form-control">


                            <label for="processor" class="form-label">Processador</label>
                            <input type="text" name="processor" id="processor" class="form-control">

                            <label for="memory_ram" class="form-label">Memoria RAM</label>
                            <input type="number" name="memory_ram" id="memory_ram" class="form-control">


                            <label for="storage_req" class="form-label">Armazenamento</label>
                            <input type="number" name="storage_req" id="storage_req" class="form-control">


                            <label for="video_card" class="form-label">Placa de Vídeo</label>
                            <input type="text" name="video_card" id="video_card" class="form-control">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="btn-produtos ">

                <button type="submit" class="btn btn-primary mt-3 btn-lg">Cadastro</button>
            </div>
        </form>

    </div>
@endsection