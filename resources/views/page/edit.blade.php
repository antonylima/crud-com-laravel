@extends('layouts.app');

@section('title', 'EDITAR')

@section('content')
<div class="m-2">
  <form class="" action="{{route('page-update',['id'=>$resultado->id])}}" method="post">
    @csrf
    @method('PUT')
    <input class="" type="text" name="nome" value="{{$resultado->nome}}" placeholder="Nome do aluno">
    <input class="" type="text" name="ano" value="{{$resultado->ano}}" placeholder="Ano">
    <button class="bth" type="submit" name="button">ATUALIZAR</button>
  </form>
</div>


@endsection
