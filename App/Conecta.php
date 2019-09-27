<?php 
	function PDO_CONNECTION(){
	$configDB = [
		"host"=>"localhost",
		"db"=>"escola",
		"usuario"=>"root",
		"senha"=>""
	];

		$db = new PDO("mysql:host=".$configDB["host"].";dbname=".$configDB["db"],$configDB["usuario"],$configDB["senha"]);
		return $db;
	}