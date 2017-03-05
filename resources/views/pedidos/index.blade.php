<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pedidos</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <h1>Pedidos</h1>

          <ul class="list-group">
            @foreach ($pedidos as $pedido)
                    <li class="list-group-item">
                        <a href="/pedidos/{{ $loop->index }}">{{ $pedido }}</a>
                    </li>
            @endforeach
          </ul>

        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/app.js" >
  </body>
</html>