@extends('layouts.app');

@section('title', 'HOME')



@section('content')
<div class="container text-center">
  <h1>ALUNOS</h1>
<a class="btn btn-success m-2" href="{{route('page-create')}}">NOVO</a>
<table class="table table-dark table-striped ">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>ANO</th>
    <th></th>
    <th></th>
  </tr>

@foreach($resultado as $value)
<tr>
  <td>{{$value->id}}</td>
  <td>{{$value->nome}}</td>
  <td>{{$value->ano}}</td>
  <td><a href="{{route('page-edit',[$value->id])}}">EDITAR</a></td>
  <td><form action="{{route('page-destroy',[$value->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="DEL">
  </form></td>
</tr>
@endforeach
</table>

</div>
@endsection
