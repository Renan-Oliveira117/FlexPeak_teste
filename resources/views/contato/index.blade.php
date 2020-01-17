@extends('layout.master')
@section('title', 'Listando todos os registros')
 
@section('content')
<h1>Lista de contato</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped table-sm">
        <thead>
      <tr>
          <th>ID</th>
          <th>FOTO</th>
          <th>NOME</th>
          <th>TELEFONE</th>
          <th>E-MAIL</th>
          <th>CIDADE</th>
          <th>ESTADO</th>
          <th>
        <a href="{{ route('contatos.create') }}" class="btn btn-info btn-sm" >Novo</a>
          </th>
      </tr>
        </thead>
        <tbody>
      @forelse($contatos as $contato)
      <tr>
          <td>{{ $contato->id }}</td>
          <td>{{$contato->name }}</td>
          <td>{{ $contato->telefone }}</td>
          <td>{{ $contato->email }}</td>
          <td>{{ $contato->cpf }}</td>
          <td>{{ $contato->cidade }}</td>
          <td>{{ $contato->estado }}</td>
          <td>
        <a href="{{ route('contatos.edit', ['id' => $contatos->id]) }}" class="btn btn-warning btn-sm">Editar</a>
        <form method="POST" action="{{ route('contatos.destroy', ['id' => $contato->id]) }}" style="display: inline" onsubmit="return confirm('Deseja excluir este registro?');" >
            @csrf
            <input type="hidden" name="_method" value="delete" >
            <button class="btn btn-danger btn-sm">Excluir</button>
        </form>
          </td>
      </tr>
      @empty
      <tr>
          <td colspan="6">Nenhum registro encontrado para listar</td>
      </tr>
      @endforelse
        </tbody>
    </table>
</div>
@endsection