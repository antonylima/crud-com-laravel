<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class VandAppController extends Controller
{
    public function index()
    {
    //dd("Olá mundo");
      $alunos = Aluno::all();

      return view("page.index",['resultado'=>$alunos]);
    }

    public function create(){

      return view('page.create');
    }

    public function store(Request $req){

      Aluno::create($req->all());

      return redirect()->route('page-index');
    }

    public function edit($id){

      $alunos = Aluno::where('id',$id)->first();
       if(!empty($alunos)){
           return view("page.edit",['resultado'=>$alunos]);
        // return view("page-index",['aluno'=>$aluno]);
       }
       else{
          return redirect()->route('page-index');
       }
    }

    public function update(Request $req, $id){

      $dados = [
        'nome'=>$req->nome,
        'ano'=>$req->ano
      ];
      Aluno::where('id',$id)->update($dados);
      return redirect()->route('page-index');
    }

    public function destroy($id)
    {
      Aluno::where('id',$id)->delete();
      return redirect()->route('page-index');
    }
}
