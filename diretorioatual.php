<?php //diretorioatual.php

$diretorioatual = getcwd();
echo "caminho do arquivo:<b>{$diretorioatual}</b><br>";

echo "<h3>Caminho completo:".dirname(__FILE__)."</h3>";
echo "<h3> Pasta atual: ".basename(__DIR__)."</h3>";

// comando para criar pasta: mkdir("nomedapasta",0777)
$recebenome = $_POST['nomedapasta'];
$nomedapasta = strtolower(str_replace(" ","-","$recebenome"));
//mkdir("$nomedapasta",0777);

//Verificar se a pasta existe ou não
if(!file_exists($nomedapasta)){
	$novapasta = mkdir("$nomedapasta",0777);
	echo "<br>Pasta Criada<br>";
	header("Location:criarpasta.php");
}else{
	echo "A pasta {$nomedapasta} já existe";
}
