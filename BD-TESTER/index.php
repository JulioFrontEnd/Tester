<?php
require __DIR__ . "/vendor/autoload.php";
use App\Conexao;

$value = new Conexao();

$value = $value->returnAll("aluno","Jonathan");
foreach ($value as $key) {
	echo "NOME: ".$key->nome."<br>MATRÍCULA: ".$key->matricula."<br><br>";
}