@extends('layouts.dashboard')

@section('conteudo-principal')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
        class="fas fa-trash fa-sm text-white-50"></i> Excluir</a>
        <a href="{{ route('formulas.list') }}" class="d-none d-sm-inline-block btn btn-md btn-secondary shadow-md"><i
            class="fas fa-arrow-left fa-md text-white-50"></i> Voltar</a>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{route('formulas.edit', [$formula->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-pen fa-sm text-white-50"></i> Editar</a>
    </div>
    

    <div class="row">
        <div class="col">

            <h4>Matéria: {{$formula->materia}}</h4>
            <h3>{{ $formula->nome }}</h3>

            <h1 class="display-1">{{$formula->formula}}</h1>

        </div>
    </div>
@endsection