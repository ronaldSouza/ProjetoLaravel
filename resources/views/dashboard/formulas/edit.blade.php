@extends('layouts.dashboard')

@section('conteudo-principal')



<div class="row">
    <div class="col">

        <form action="{{ route('formulas.update', [$formula->id]) }}" class="user" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Matéria</label>
                <input type="text" class="form-control" id="materia" name="materia" value="{{ $formula->materia }}"">
            </div>
            
            <div class="form-group">
                <label for="nome">Nome da Fórmula</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $formula->nome }}">
            </div>
            <div class="form-group">
                <label for="formula">Fórmula</label>
                <input type="text" class="form-control" id="formula" name="formula" value="{{  $formula->formula  }}">
            </div>

            <div class="col">
                <div class="row">
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#43')" /> &#43 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8722')" /> &#8722 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#215')" /> &#215 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#247')" /> &#247 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#61')" /> &#61 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8800')" /> &#8800 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#177')" /> &#177 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#60')" /> &#60 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8924')" /> &#8924 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#62')" /> &#62 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8925')" /> &#8722 </a> </br>
                                        
                </div>
                <div class="row">
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8731')" /> &#8731 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8732')" /> &#8732 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8734')" /> &#8734 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8756')" /> &#8756 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8736')" /> &#8736 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8304')" /> &#8304 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#176')" /> &#176 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#185')" /> &#185 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#178')" /> &#178 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#179')" /> &#179 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8308')" /> &#8308 </a> </br>
                                    
                </div>
                <div class="row">
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8309')" /> &#8309 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8310')" /> &#8310 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8311')" /> &#8311 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8312')" /> &#8312 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8313')" /> &#8313 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8314')" /> &#8314 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8315')" /> &#8315 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8316')" /> &#8316 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8319')" /> &#8319 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8317')" /> &#8317 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8318')" /> &#8318 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8869')" /> &#8869 </a> </br>                
                </div>
                <div class="row">
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8710')" /> &#8710 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8730')" /> &#8730 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8320')" /> &#8320 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8321')" /> &#8321 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8322')" /> &#8322 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8323')" /> &#8323 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8324')" /> &#8324 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8325')" /> &#8325 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8326')" /> &#8326 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8327')" /> &#8327 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8328')" /> &#8328 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8329')" /> &#8329 </a> </br>                
                </div>
                <div class="row">
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8330')" /> &#8330 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8331')" /> &#8331 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8332')" /> &#8332 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8333')" /> &#8333 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8334')" /> &#8334 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8336')" /> &#8336 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8337')" /> &#8337 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8338')" /> &#8338 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8338')" /> &#8339 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8338')" /> &#8340 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8767')" /> &#8767 </a> </br>
                    <a href="#" class="btn btn-lg" onclick="myFunct('&#8345')" /> &#8345 </a> </br>               
              
                </div>

                    
                
                
                

                <script>
                    function myFunct(the_text) {
                        document.getElementById('formula').value += the_text;
                    return;
                    }
                </script>
            </div>  

            <div class="form-group">
                <a href="{{route('formulas.show',[$formula->id])}}" class="btn btn-secondary bg-danger">Cancelar</a>
                
                <button type="submit" class="btn btn-secondary bg-success">
                    Salvar
                </button>
            </div>

        </form>
        
    </div>

</div>
@endsection
