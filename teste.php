<?php
	session_start();
	$sessao = $_SESSION['estoque'];

	foreach ($sessao as $arr) {
		echo $arr;

	}



var_dump($_SESSION['estoque']);
?>