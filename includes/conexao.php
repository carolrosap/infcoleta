<?php
	$mysqli = new mysqli('localhost', 'root', '123456', 'hackaton');
    if ($mysqli->connect_error) {
        die('Erro na Conexão (' . $mysqli->connect_error . ') ' . $mysqli->connect_error);
        //echo "oi3";
	}else{
		//echo "oi";
	}
    $mysqli->query("SET NAMES 'utf8'");
    $mysqli->query('SET character_set_connection=utf8');
    $mysqli->query('SET character_set_client=utf8');
    $mysqli->query('SET character_set_results=utf8');
?>