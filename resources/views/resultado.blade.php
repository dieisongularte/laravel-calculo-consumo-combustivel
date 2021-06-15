@extends('app')

@section('titulo')
Calculo de Consumo de Combustível
@stop

@section('conteudo')
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
@stop
