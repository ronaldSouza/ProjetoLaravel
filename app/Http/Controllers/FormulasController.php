<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formulas;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;

class FormulasController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }


    //Contruir view Home
    public function index() {
    

        return view('dashboard.formulas.home');
    }
    
    //retornar formulário de cadastro
    public function create() {
        return view('dashboard.formulas.create');
    }

    public function store(Request $request) {


        $request->validate([
            'materia' => 'required',
            'nome' => 'required',
            'formula' => 'required',
            ''

        ]);

        $formulas = new Formulas;
        $formulas->nome = $request->post('nome');
        $formulas->materia = $request->post('materia');
        $formulas->formula = $request->post('formula');


        $formulas->save();

        return redirect()->to(route('formulas.index'));

    }
    
    public function show($id) {
        
        $formulas = Formulas::find($id);

        


        if($formulas) {
            Gate::authorize('show-formula', $formulas);
            return view('dashboard.formulas.show', ['formula'=>$formulas]);
        }
        else {
            return redirect()->to(route('formulas.index'));
        }

    }

    public function list() {
        $id = Auth::id();

        $lista = Formulas::where('id', $id);
        return view('dashboard.formulas.list', ['formulas'=>$lista]);
    }

    public function edit(Request $request, Formulas $formula) {

        return view('dashboard.formulas.edit',['formula'=>$formula]);
    }

    public function update(Request $request, Formulas $formula) {

        $materia = $request->post('materia');
        $formula->materia = $materia;

        $nome = $request->post('nome');
        $formula->nome = $nome;

        $formulas = $request->post('formula');
        $formula->formula = $formulas;

        $formula->save();

        return redirect()->to(route('formulas.show', ['formula'=>$formula->id]));

    }

}
