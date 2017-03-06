<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem dos Pacientes</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Listagem de Pacientes</h1>
      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">Pacientes</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome do Paciente</th>
                    <th>Medico</th>
                    <th>Exames</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($pacientes as $paciente)
                <tr>
                  <td>
                    {{$paciente->id}}
                  </td>
                  <td>
                    {{$paciente->paciente}}
                  </td>
                  <td>
                     {{$paciente->medico}}
                  </td>
                  <td>
                     {{$paciente->exames}}
                  </td>
                  
                  <td>
                    <a href="/pacientes/{{ $paciente->id }}">Detalhes</a>
                 </td>
              </tr>
              @endforeach
            </tbody>
            </table>

        </div>

        </div>

      </div>
      <a href="/">Voltar o inicio</a>
    </div>

    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>