@extends('template.template')

@section('content')
    <h1 class="d-flex justify-content-center mb-4 mt-4">Dashboard</h1>
    <section class="container">
        <div class="row row-cols-3">

            <div class="col">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total de Produtos Cadastrados</div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total de Produtos Por Desenvolvedor</div>
                    <div class="card-body">
                        <p>XXXX</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total de Produtos  por Distribuidor</div>
                    <div class="card-body">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
