<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    public function calcular()
    {
        $precoGasolina = 4.80;
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $valorGasto = ($distancia / $autonomia) * $precoGasolina;
        return $valorGasto;
    }
}
