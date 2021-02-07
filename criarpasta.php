<fieldset><legend>Criar Pastas</legend>
<form action="diretorioatual.php" name="criar" method="POST">
	Nome da Pasta <input type="text" name="nomedapasta">
					<input type="submit" value="Criar pasta">		
</form>
</fieldset>


<fieldset><legend>Renomear Pastar</legend>
<form action="renomearpaster.php"  method="POST">
	Nome incorreto: <input type="text" name="nomeantigo">
	Novo Nome:		<input type="text" name="nomenovo">
					<input type="submit" value="Renomear">		
</form>
</fieldset>
<fieldset>
<!-- Listar pastas do diretorio apontado -->
<h1>Pastas do Diretório</h1>
<?php
if($diretorio = opendir("./")){
	while(false !==($pasta = readdir($diretorio))){
		if(is_dir($pasta)and($pasta !=".")and($pasta !="..")){
			echo "<a style='text-decoration:none' href='$pasta'>$pasta</a><br>
			<form action='criarpasta.php'> <input type='file'><input type='submit'></form>";
			
		}
	}
	closedir($diretorio);
}
?>
</fieldset>

