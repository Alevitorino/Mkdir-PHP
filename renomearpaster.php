<?php //renomearpaster.php
$nomeantigo		= $_POST['nomeantigo'];
$nomenovo 		= $_POST['nomenovo'];
rename($nomeantigo,$nomenovo);
header("Location:criarpasta.php");