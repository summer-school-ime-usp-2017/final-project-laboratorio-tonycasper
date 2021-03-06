<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medicos</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1>Detalhes do medico</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
               <strong>Medicos</strong>
            </div>
            <table class="table table-striped">
              
              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>CRM</th>
                    <th>E-mail</th>                 
                  </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                   {{$medico->id}}
                  </td>
                  <td>
                    {{$medico->nome}}
                  </td>
                  <td>
                     {{$medico->crm}}
                  </td>
                  <td>
                     {{$medico->email}}
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