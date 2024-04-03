<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('receber/nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome . ' tenho ' . $idade . ' anos de idade';
});

Route::get('receber/nome/nascimento/cidadeNatal', function (Request $request) {
    $nome = $request->input('nome');
    $nascimento = $request->input('nascimento');
    $cidadeNatal = $request->input('cidadeNatal');
    return 'meu nome é ' . $nome . ' minha data de nascimento é ' . $nascimento . ' nasci na cidade de ' . $cidadeNatal;
});

Route::get('receber/primeiroNumero/segundoNumero', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero + $segundoNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return $resultado;
});

Route::get('receber/primeiro/segundo', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero / $segundoNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/s', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('s');
    $resultado = $primeiroNumero * $segundoNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero/segundoNumero/terceiroNumero/quartoNumero/quintoNumero', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $quartoNumero = $request->input('quartoNumero');
    $quintoNumero = $request->input('quintoNumero');
    $resultado = ($primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero + $quintoNumero) / 5;
    return $resultado;
});

Route::get('receber/primeiroNumero/se', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('se');
    $resultado = $segundoNumero / $primeiroNumero;
    return $resultado;
});

Route::get('receber/primeiroNumero', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $resultado = $primeiroNumero * 2;
    return 'O dobro do ' . $primeiroNumero . ' é igual a: ' . $resultado;
});

Route::get('calcular/areaRetangulo', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('calcular/desconto', function (Request $request) {
    $preço = $request->input('preço');
    $desconto = $request->input('desconto');
    $resultado =  ($desconto * $preço) / 100;
    return $preço - $resultado;
});

Route::get('calcular/aumentosalarial', function (Request $request) {
    $salario = $request->input('salario');
    $aumento = $request->input('aumento');
    $resultado = ($aumento * $salario) / 100;
    return $salario . ' salario anterior' . ', ' . $aumento . '% aumento' . ', ' . $resultado + $salario . ' salario atual';
});

Route::get('codigo', function (Request $request) {
    $compra = $request->input('compra');
    $resultado = $compra / 10;
    return $resultado;
});

Route::get('valordecomissao', function (Request $request) {
    $vendas = $request->input('vendas');
    $resultado = ($vendas * 5) / 100;
    return $resultado;
});

Route::get('calcular/dias', function (Request $request) {
    $dia = $request->input('dias');
    $resultado = $dia * 24 . 'horas ' . $dia * 1440 . 'minutos ' . $dia * 86400 . 'segundos';
    return $resultado;
});

Route::get('receber/preço', function (Request $request) {
    $preço = $request->input('preço');
    $quantidade = $request->input('quantidade');
    $resultado = $preço * $quantidade;
    return $resultado;
});

Route::get('exemplo/condicao', function (Request $request) {
    $idade = $request->input('idade');
    $mensagem = "";
    if ($idade >= 18) {
        $mensagem = "maior de idade";
    } else {

        $mensagem = "menor de idade";
    }

    return $mensagem;
});

Route::get('/verifica/idade', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade < 18) {

        return "menor de idade";
    } else {
        return "maior de idade";
    }
});

Route::get('verificar/par', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return " ele é par";
    } else {
        return "ele é impar";
    }
});

Route::get('verifica/numero', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 10) {
        return "é maior que 10";
    } else {
        return "é menor que 10";
    }
});

Route::get('temperatura', function (Request $request) {
    $temperatura = $request->input('temperatura');
    if ($temperatura > 30) {
        return "Esta quente!";
    } else {
        return "Nao está quente!";
    }
});

Route::get('determinar/numero', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return "é positivo";
    } else if ($numero < 0) {
        return "é negativo";
    } else {
        return "é zero";
    }
});

Route::get('maior/numero', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2) {
        return "primeiro numero é maior";
    } else {
        return "o segundo numero é maior";
    }
});

Route::get('divisivel', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 3 == 0) {
        return "é divisivel por 3";
    } else {
        return "nao é divisivel";
    }
});

Route::get('exercicio1', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 10) {
        return "é maior que 10";
    } else {
        return "nao é maior que 10";
    }
});

Route::get('exercicio2', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return "é positivo";
    } else if ($numero < 0) {
        return "é negativo";
    } else {
        return "é zero";
    }
});

Route::get('exercicio3', function (Request $request) {
    $idade = $request->input('idade');
    $mensagem = "";
    if ($idade >= 18) {
        $mensagem = "Você é maior de idade";
    } else {

        $mensagem = "Você é menor de idade";
    }

    return $mensagem;
});

Route::get('exercicio4', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 2 == 0) {
        return " ele é par";
    } else {
        return "ele é impar";
    }
});

Route::get('exercicio5', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2) {
        return "primeiro numero é maior";
    } else {
        return "o segundo numero é maior";
    }
});

Route::get('exercicio6', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 9 == 0) {
        return "é divisivel por 9";
    } else {
        return "nao é divisivel por 9";
    }
});

Route::get('exercicio7', function (Request $request) {
    $temperatura = $request->input('temperatura');
    if ($temperatura > 30) {
        return "Esta quente!";
    } else {
        return "Nao está quente!";
    }
});

Route::get('exercicio8', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 7 == 0) {
        return "é divisivel por 7";
    } else {
        return "nao é divisivel por 7";
    }
});

Route::get('exercicio9', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade < 12) {
        return "Você é uma criança";
    } else {
        return "Você nao é uma criança";
    }
});

Route::get('exercicio10', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        if ($numero % 2 != 0) {
            return "é positivo e impar";
        }
    } else {
        return "não é positivo";
    }
});

Route::get('exercicio11', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 100) {
        return "é maior que 100";
    } else if ($numero < 100) {
        return "é menor que 100";
    } else {
        return "é igual a 100";
    }
});

Route::get('exercicio12', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 6 == 0) {
        return "é divisivel por 6";
    } else {
        return "nao é divisivel por 6";
    }
});

Route::get('exercicio13', function (Request $request) {
    $nome = $request->input('nome');
    if ($nome = "Alice") {
        return "Olá, Alice!";
    } else {
        return "Olá," . $nome;
    }
});

Route::get('exercicio14', function (Request $request) {
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');
    if ($idade >= 18) {
        if ($carteira == "Sim") {
            return "pode dirigir";
        } else {
            return "Nao pode dirigir, pois nao tem carteira";
        }
    } else {
        return "nao pode dirigir";
    }
});

Route::get('exercicio16', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 < $numero2) {
        if ($numero1 != $numero2) {
            return "numero1 é menor";
        }
    } else {
        return "numero 2 é menor";
    }
});

Route::get('exercicio17', function (Request $request) {
    $idade = $request->input('idade');
    $nome = $request->input('nome');
    if ($idade >= 18) {
        return "Você é maior de idade, " . $nome . "!";
    } else {
        return "Você nao é maior de idade";
    }
});

Route::get('exercicio18', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');

    if ($numero1 == 0) {
        return "não é possivel efetuar a divisão pois o primeiro numero é zero";
    } else if ($numero2 == 0) {
        return "não é possivel efetuar a divisão pois o segundo numero é zero";
    } else {
        $resultado = $numero1 / $numero2;
        return $resultado;
    }
});

Route::get('exercicio19', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 * $numero2 > 100) {
        return "é maior que 100";
    } else {
        return "nao é maior que 100";
    }
    $resultado = $numero1 * $numero2;
    return $resultado;
});

Route::get('exercicio20', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resultado = $numero1 + $numero2;
    if ($resultado % 2 == 0) {
        return "a soma dos dois é par";
    } else {
        return $numero1 / $numero2;
    }
});

Route::get('exercicio21', function (Request $request) {
    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    if ($resultado >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
});

Route::get('exercicio22', function (Request $request) {
    $renda = $request->input('renda');
    if ($renda <= 1900) {
        return "isento de imposto";
    } else if ($renda > 1900) {
        if ($renda <= 2800) {
            return $renda - ((7 * $renda) / 100);
        }
    } else if ($renda > 2800) {
        if ($renda <= 3700) {
            return $renda - ((15 * $renda) / 100);
        } else {
            return $renda - ((22 * $renda) / 100);
        }
    }
});

Route::get('exercicio23', function (Request $request) {
    $ano = $request->input('ano');
    if ($ano % 4 == 0) {
        return "ano bissexto";
    } else {
        return "nao é ano bissexto";
    }
});

Route::get('exercicio24', function (Request $request) {
    $preço = $request->input('preço');
    if ($preço > 1000) {
        return $preço - (($preço * 15) / 100);
    } else {
        return $preço;
    }
});

Route::get('exercicio25', function (Request $request) {
    $peso = $request->input('peso');
    $altura = $request->input('altura');
    $resultado = $peso / ($altura * $altura);
    if ($resultado < 18.5) {
        return "baixo peso";
    } else if ($resultado >= 18.5) {
        if ($resultado <= 24.9) {
            return "peso normal";
        }
    }
    if ($resultado >= 25) {
        if ($resultado <= 29.9) {
            return "sobrepeso";
        }
    }
    if ($resultado >= 30) {
        if ($resultado <= 34.9) {
            return "obesidade classe I";
        }
    }
    if ($resultado >= 35) {
        if ($resultado <= 39.9) {
            return "obesidade classe II";
        }
    } else {
        return "obesidade classe III";
    }
    return "teste";
});

Route::get('exercicio26', function (Request $request) {
    $salario = $request->input('salario');
    $codigo = $request->input('codigo');
    if ($codigo == 1) {
        return "o aumento salaria foi de " . (($salario * 5) / 100);
    }
    if ($codigo == 2) {
        return "o aumento salaria foi de " . (($salario * 10) / 100);
    }
    if ($codigo == 3) {
        return "o aumento salaria foi de " . (($salario * 15) / 100);
    }
    if ($codigo == 4) {
        return "o aumento salaria foi de " . (($salario * 20) / 100);
    }
});
