@extends('layout.master')
@section('title', 'Registro')
 
@section('content')
<h1>Registro</h1>
<hr>
 
<div class="container">
 
 
    @if(isset($contato))
 
        {!! Form::model($contato, ['method' => 'put', 'route' => ['contato.update', $contato->id ], 'class' => 'form-horizontal']) !!}
 
    @else
 
        {!! Form::open(['method' => 'post','route' => 'contato.store', 'class' => 'form-horizontal']) !!}
 
    @endif
 
    <div class="card">
        <div class="card-header">
      <span class="card-title">
          @if (isset($contato))
        Editando registro #{{ $contato->id }}
          @else
        Criando novo registro
          @endif
      </span>
        </div>
        <div class="card-body">
      <div class="form-row form-group">
 
          {!! Form::label('nome', 'Nome', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder'=>'Digite um nome']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('telefone', 'Telefone', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder'=>'Digite telefone sem caractere']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('email', 'E-mail', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-8">
 
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Digite E-mail']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('cpf', 'CPF', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-4">
 
        {!! Form::text('cpf', null, ['class' => 'form-control', 'placeholder'=>'Digite CPF sem caractere']) !!}
 
          </div>
 
      </div>
      <div class="form-row form-group">
 
          {!! Form::label('cidade', 'Cidade', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-10">
 
        {!! Form::textarea('cidade', null, ['class' => 'form-control', 'placeholder'=>'Digite Cidade']) !!}
 
          </div>

          <div class="form-row form-group">
 
          {!! Form::label('estado', 'Estado', ['class' => 'col-form-label col-sm-2 text-right']) !!}
 
          <div class="col-sm-10">
 
        {!! Form::textarea('estado', null, ['class' => 'form-control', 'placeholder'=>'Digite Estado']) !!}
 
          </div>
 
      </div>
        </div>
        <div class="card-footer">
      {!! Form::button('cancelar', ['class'=>'btn btn-danger btn-sm', 'onclick' =>'windo:history.go(-1);']); !!}
      {!! Form::submit(  isset($contato) ? 'atualizar' : 'criar', ['class'=>'btn btn-success btn-sm']) !!}
 
        </div>
    </div>
 
    {!! Form::close() !!}
 
</div>
@endsection