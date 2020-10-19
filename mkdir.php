<?php

$nomedir = $_POST['cod_2'];
$dir = "Usuarios/$nome_2}";

if(is_dir($dir)){
	echo "A pasta \"$nome_2\" Ja existe";
	echo "<br/>";
	echo "<a href="javascript:history.back()">Voltar<a\>";

}else {
	mkdir($dir,0777)
	echo "<br/>";
	echo "<a href ="javascript;history.back()">Voltar <a/>";

}





?> 