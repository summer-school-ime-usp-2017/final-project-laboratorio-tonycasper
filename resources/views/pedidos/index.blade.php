<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listagem das Pedidos</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Listagem de Pedidos</h1>
      </div>

      <div class="row">

        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">Pedidos</div>

            <table class="table table-striped">

              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome do Paciente</th>
                    <th>Medico Responsavel</th>
                    <th>Exames</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($pedidos as $pedido)
                <tr>
                  <td>
                      {{$pedido->id}}
                  </td>
                  <td>
                    {{$pedido->paciente}}
                  </td>
                  <td>
                     {{$pedido->medico}}
                  </td>
                  <td>
                     {{$pedido->exames}}
                  </td>
                  
                  <td>
+                    <a href="/pedidos/{{ $pedido->id }}">Detalhes</a>
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