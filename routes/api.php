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

Route::get('/verifica/idade',function (Request $request){
    $idade=$request->input('idade');
    
    if ($idade < 18 ) {
        
        return "menor de idade";
        
    } else { return "maior de idade"; }

});

Route::get('verificar/par', function(Request $request){
    $numero = $request->input('numero');
    if ($numero % 2 == 0){return " ele é par";}
    else {return "ele é impar";}
});

Route::get('verifica/numero', function(Request $request){
    $numero = $request->input('numero');
    if ($numero > 10){return "é maior que 10";}
    else {return "é menor que 10";}
});

Route::get('temperatura', function(Request $request){
    $temperatura = $request->input('temperatura');
    if ($temperatura > 30){return "Esta quente!";}
    else {return "Nao está quente!";}

});

Route::get('determinar/numero',function(Request $request){
    $numero = $request->input('numero');
    if ($numero > 0 ){return "é positivo";}
    else if ($numero < 0){return "é negativo";}
    else {return "é zero";}
});

Route::get('maior/numero',function(Request $request){
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2){return "primeiro numero é maior";}
    else {return "o segundo numero é maior";}
});

Route::get('divisivel', function(Request $request){
    $numero = $request->input('numero');
    if ($numero % 3 == 0){return "é divisivel por 3";}
    else {return "nao é divisivel";}
});