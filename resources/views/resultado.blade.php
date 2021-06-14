<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo de Consumo de Combustível</title>
  </head>
  <body>
    <div class="painel">
      <h2>Resultado do cálculo de consumo</h2>
      <div class="conteudo-painel">
        <div class="sucesso">
          <h3>O valor total gasto será de</h3>
          <ul>
            <li><b>Gasolina:</b> R$ {{$valor}}</li>
          </ul>
        </div>
        <a class="botao" href="{{url('/')}}" title="Voltar">Voltar</a>
      </div>
    </div>
  </body>
</html>
