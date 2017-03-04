@extends('layout')

@section('title', 'Detalhes da Exame')

@section('page-header-content', 'Detalhes do Exame')

@section('content')
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">

            <div class="panel-heading"><strong>Exame:</strong></div>

            <ul class="list-group">
              <li class="list-group-item">{{ $exame->id }}</li>
              <li class="list-group-item">{{ $exame->nome }}</li>
              <li class="list-group-item">{{ $exame->metodo }}</li>
            </ul>
          </div>
        </div>
      </div>
@endsection
