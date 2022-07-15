@extends('template.modelo')
@section('title')
    Lista de Produtos
@endsection
@section('content')
    <div class="container-fluid d-flex justify-content-center mb-3 mt-4">
        <h1>Lista de Produto</h1>
    </div>
    @if (Session::get('message'))
        <div class="container p-5">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if ($products == null)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p class="d-flex justify-content-center">Não há produtos para serem listados.</p>
        </div>
    @else
        <div class="container w-45 mb-3 mt-4 d-flex justify-content-end">
            <div class="row">
                <div class="col-sm mt-2 mb-5">
                    <form action="{{ route('product.show') }}" method="GET">
                        <div class="input-group">
                            <input type="search" class="form-control rounded" name="search" />
                            <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container listagem-produtos d-flex justify-content-center align-items-center">
            <table class="table table-striped row-border" style="width:100%" id="tableView">
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
                    <?php foreach ($products as $p): ?>
                    <tr>
                        <td> {{ $p->name }} </td>
                        <td> {{ $p->gender }} </td>
                        <td>{{ $p->developer }} </td>
                        <td> {{ $p->distributor }} </td>
                        <td>{{ date('d/m/Y', strtotime($p->launch)) }}</td>
                        <td>{{ $p->so }} </td>
                        <td>{{ $p->processor }} </td>
                        <td>{{ $p->memory_ram }} </td>
                        <td>{{ $p->storage_req }} </td>
                        <td>{{ $p->video_card }} </td>
                        <td>
                            <button class="btn btn-outline-info d-inline-block text-dark"><a style="text-decoration: none;"
                                    href="{{ route('product.editar', $p->id) }}">Atualizar</a></button>
                        </td>
                        <td>
                            <form action="{{ route('product.deletar', $p->id) }}" method="get">
                                <button class="btn  btn-outline-danger d-inline-block"><a
                                        style="text-decoration: none;">Excluir</a></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="justify-content-center pagination">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    @endif
@endsection
