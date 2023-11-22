@extends('layouts.app');

@section('title', 'HOME')



@section('content')

<h1>ALUNOS</h1>
<a class="" href="{{route('page-create')}}">NOVO ALUNO</a>
<table>
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>ANO</th>
  </tr>
@foreach($resultado as $value)
<tr>
  <td>{{$value->id}}</td>
  <td>{{$value->nome}}</td>
  <td>{{$value->ano}}</td>
  <td><a href="{{route('page-edit',[$value->id])}}">E</a></td>
  <td><form action="{{route('page-destroy',[$value->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="X">
  </form></td>
</tr>
@endforeach

</table>
@endsection
