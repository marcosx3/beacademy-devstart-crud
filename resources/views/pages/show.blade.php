@extends('template.template')
@section('title')
    Lista de Produtos
@endsection
@section('content')
    <div class="container-fluid d-flex justify-content-center mb-3 mt-4">
        <h1>Lista de Produto</h1>
    </div>
    <div class="container listagem-produtos">
        @include('message.flash-message')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>Desenvolvedor</th>
                    <th>Distribuidor</th>
                    <th>Lançado</th>
                    <th>Sistema Operacional</th>
                    <th>Processador</th>
                    <th>Memoria Ram</th>
                    <th>Armazenamento</th>
                    <th>Placa Grafica</th>
                    <th>Atualizar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @forelse  ($product as $p)
                    <tr>
                        <td> {{ $p->id }} </td>
                        <td> {{ $p->gender }} </td>
                        <td> {{ $p->name }} </td>
                        <td>{{ $p->developer }} </td>
                        <td>
                            <{{ $p->distributor }} </td>
                        <td>{{ date('d/m/Y', strtotime($p->launch)) }}</td>
                        <td>{{ $p->so }} </td>
                        <td>{{ $p->processor }} </td>
                        <td>{{ $p->memory_ram }} </td>
                        <td>{{ $p->storage_req }} </td>
                        <td>{{ $p->video_card }} </td>
                        <td>
                            <a href="{{ route('product.editar', $p->id) }}" class="btn btn-warning ">Atualizar</a>
                        </td>
                        <td>
                            <a href="{{ route('product.deletar', $p->id) }}" class="btn btn-danger ">Excluir</a>
                        </td>
                    </tr>
            </tbody>
        </table>
        @empty
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 <p class="d-flex justify-content-center">Não há produtos para serem listados.</p>
            </div>
        @endforelse
    </div>
@endsection
