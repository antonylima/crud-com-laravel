@extends('layouts.app');

@section('title', 'MATRICULAR')

@section('content')
<div class="m-2">
  <form class="" action="{{route('page-store')}}" method="post">
    @csrf
    <input class="" type="text" name="nome" placeholder="Nome do aluno">
    <input class="" type="text" name="ano" placeholder="Ano">
    <button class="bth" type="submit" name="button">MATRICULAR</button>
  </form>
</div>


@endsection
