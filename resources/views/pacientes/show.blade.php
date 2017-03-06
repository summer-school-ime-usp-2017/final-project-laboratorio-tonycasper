<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pacientess</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Detalhes do Pacientes</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
               <strong>Pacientes</strong>
            </div>
            <table class="table table-striped">
              
              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome do Paciente</th>
                    <th>Medico responsavel</th>
                    <th>Exames Vinculados:</th>                 
                  </tr>
              </thead>

              <tbody>
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
              </tr>
            </tbody>
            </table>

            </div>
          </div>
        </div>
       <a href="/">Voltar o inicio</a>
    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>