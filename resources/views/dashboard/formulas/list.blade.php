@extends('layouts.dashboard')
@section('conteudo-principal')
      
<div class="container-sm">

    @foreach($formulas as $formula)
    
    
    <div class="row-lg-10">
        <div class="card-group">

            <div class="col">

                <div class="card col-lg-10 bg-success" style="max-width: 15rem; ">
                    <div class="card-body">
                    <h6 class="card-title text-black-50">{{ $formula->materia }}</h6>
                    <h3 class="card-title text-black-50">{{ $formula->nome }}</h3>
                   

                    <a href="{{ route('formulas.show', [$formula->id]) }}" class="btn btn-primary d-block ml-auto mr-auto">ver</a>
                    </div>
                </div>
               
               
            </div>           
            
        </div>

    </div>
    @endforeach
    

</div>
@endsection