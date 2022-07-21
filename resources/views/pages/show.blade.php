@extends('template.template')
@section('title')
    Lista de Produtos
@endsection
@section('content')
    <div class="container-fluid d-flex justify-content-center mb-3 mt-4">
        <h1>Lista de Produto</h1>
    </div>
    @if ($products == null)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p class="d-flex justify-content-center">Não há produtos para serem listados.</p>
        </div>
    @else
        <div class="container listagem-produtos">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
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
                    <?php foreach ($products as $p): ?>
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
                            <button class="btn btn-info d-inline-block"><a style="text-decoration: none;"
                                    href="{{ route('product.editar', $p->id) }}">Atualizar</a></button>
                        </td>
                        <td>
                            <form action="{{ route('product.deletar', $p->id) }}" method="get">
                                <button class="btn btn-danger d-inline-block"><a
                                        style="text-decoration: none;">Excluir</a></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    @endif
@endsection
