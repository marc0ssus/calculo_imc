<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    use HasFactory;

    function calcula_idade($nascimento) {
        $nascimento=explode('-',$nascimento);
        $data=date('d/m/Y'); $data=explode('/',$data);
        $anos=$data[2]-$nascimento[0];
        if($nascimento[1] > $data[1]) return $anos-1;
        if($nascimento[1] == $data[1])
        {
           if($nascimento[3] <= $data[0]) {
              return $anos;
           }
           else {
               return $anos-1;
            }
        }
      return $anos;
    }

    function calcula_imc($peso, $altura) {
        return round($peso / ($altura * $altura));
    }

    function classificacao_imc($imc) {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Sobrepeso";
        } elseif ($imc < 35) {
            return "Obesidade I";
        } elseif ($imc < 40) {
            return "Obesidade II";
        } else {
            return "Obsidade III";
        }
    }

    function classificacao_sono($sono) {
        $idade = $this->calcula_idade($_GET["datanascimento"]);
        //recém-nascidos e bebês
        if ($idade < 1) {
            if ($sono > 13 && $sono < 17) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 17) {
                return "Horas de sono em excesso, recomendações: 13 a 16 horas";
            }
            else {
                return "Horas de sono recomendadas: 13 a 16 horas";
            }
        }
        //primeira infãncia
        if ($idade < 3 && $idade > 1) {
            if ($sono > 11 && $sono < 14) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 14) {
                return "Horas de sono em excesso, recomendações: 11 a 14 horas";
            }
            else {
                return "Horas de sono recomendadas: 11 a 14 horas";
            }
        }
        //idade pre-escolar
        if ($idade < 6 && $idade > 3) {
            if ($sono > 10 && $sono < 13) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 13) {
                return "Horas de sono em excesso, recomendações: 10 a 13 horas";
            }
            else {
                return "Horas de sono recomendadas: 10 a 13 horas";
            }
        }
        //idade escolar
        if ($idade < 13 && $idade > 6) {
            if ($sono > 9 && $sono < 11) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 11) {
                return "Horas de sono em excesso, recomendações: 9 a 11 horas";
            }
            else {
                return "Horas de sono recomendadas: 9 a 11 horas";
            }
        }
        //adolecentes
        if ($idade < 17 && $idade > 13) {
            if ($sono > 8 && $sono < 10) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 10) {
                return "Horas de sono em excesso, recomendações: 8 a 10 horas";
            }
            else {
                return "Horas de sono recomendadas: 8 a 10 horas";
            }
        }
        //jovens adultos e adultos
        if ($idade < 64 && $idade > 17) {
            if ($sono > 7 && $sono < 9) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 9) {
                return "Horas de sono em excesso, recomendações: 7 a 9 horas";
            }
            else {
                return "Horas de sono recomendadas: 7 a 9 horas";
            }
        }
        if ($idade > 64) {
            if ($sono > 7 && $sono < 7) {
                return "Horas de sono dentro das recomendações";
            }
            else if ($sono > 7) {
                return "Horas de sono em excesso, recomendações: 7 a 8 horas";
            }
            else {
                return "Horas de sono recomendadas: 7 a 8 horas";
            }
        }
    }

    public function resultado() {
        $valores["nome"] = $_GET["nome"];
        $valores["idade"] = $this->calcula_idade($_GET["datanascimento"]);
        $valores["peso"] = $_GET["peso"];
        $valores["altura"] = $_GET["altura"];
        $valores["imc"] = $this->calcula_imc($valores["peso"],$valores["altura"]);
        $valores["sono"] = $_GET["horasono"];
        $valores["classificacaoimc"] = $this->classificacao_imc($valores["imc"]);
        $valores["classificacaosono"] = $this->classificacao_sono($valores["sono"]);
        return $valores;
    }
}