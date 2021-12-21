@extends('layouts.dashboard')

@section('conteudo-principal')

<div class="row">
    <div class="col">
        <p>Pagina Home</p>
    </div>

</div>
<div class="container-sm">

    <div class="row-lg-10">
        <div class="card-group">
            <div class="col">
                <div class="card col-lg-10 bg-success" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title text-black-50">Crie Uma Fórmula</h5>
                    <a href="{{ route('formulas.create') }}" class="btn btn-primary d-block ml-auto mr-auto">Criar</a>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="card col-lg-10 bg-success" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title text-black-50">Explore novas Fórmulas</h5>
                    <a href="{{ route('formulas.list') }}" class="btn btn-primary d-block ml-auto mr-auto">Explorar</a>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="card col-lg-10 bg-success" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title text-black-50">Veja suas Fórmulas</h5>
                    <a href="#" class="btn btn-primary d-block ml-auto mr-auto">Ver</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
    



@endsection