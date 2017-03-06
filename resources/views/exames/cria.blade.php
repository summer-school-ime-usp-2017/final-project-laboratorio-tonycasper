@extends('layouts.master')

@section('title', 'Cadastro de exames')

@section('page-header-content', 'Cadastro de exames')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Exame</h3>
        </div>
        <div class="panel-body">
          <a href="/exames">
            <span class="glyphicon glyphicon-th-list"> exames</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/exames" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome" />
        </div>
        <div class="form-group">
          <label for="metodo">Metodo</label>
          <input type="text" class="form-control" name="metodo" id="metodo" />
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>

@endsection