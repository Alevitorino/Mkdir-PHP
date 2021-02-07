<?php // upload.php



$uploadok = 1;
$target_dir = "/."; // Pasta de destino
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]); // Salvar o arquivo na pasta uploads com o seu nome 
$imagefiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // Converter os nomes di arquivo e extensão para minúsculo
//Checar se é uma imagem 
if (isset($_POST['submit'])){           
	$check = getimagesize($_FILES["filetoupload"]["tmp_name"]);
	if ($check !== false){
		echo " É uma imagem - ".$check["mime"]. ".";
		$uploadok=1;
	} else{
		echo "\Não é uma imagem - ".$check["mime"]. ".";
		$uploadok=0;
	}
}	
 // Checar se já existe o arquivo na pasta
if(file_exists($target_file)){
	echo "<br> Imagem já existe";
	$uploadok=0;
}
// Arquivos permitidos
if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype !="gif"){
	echo "Desculpe, apenas JPG, JPEG, PNG, e GIF são permitidos";
	$uploadok=0;
}
//Após as confirmações verificar se $upload=1 para fazer o up 
if ($uploadok==0){
	echo "Desculpe, arquivo não upado";
}else{
	if( move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)){
		echo "O arquivo <br>".basename($_FILES["filetoupload"]["name"])."</b> foi transferido com sucesso!!!!!!!";
		
	}else{
		echo "Desculpe, algo de errado não está certo";
	}
}