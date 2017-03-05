<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem das Medicos</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Listagem de Medicos</h1>
      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">medicos</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Metodo</th>
                    <th>#</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($medicos as $medico)
                <tr>
                  <td>
                      {{$medico->id}}
                  </td>
                  <td>
                    {{$medico->nome}}
                  </td>
                  <td>
                     {{$medico->metodo}}
                  </td>
                  <td>
+                    <a href="/medicos/{{ $medico->id }}">Detalhes</a>
+                 </td>
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