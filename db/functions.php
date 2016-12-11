<?php

	$mysqli = false;

	function connect_db(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "techforum_db");	
		$mysqli->query("SET CHARSET utf8");
	}

	function close_db(){
		global $mysqli;
		$mysqli->close();
	}

	function getNews($limit){
		global $mysqli;
		connect_db();
		$result = $mysqli->query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit");
		close_db ();
		return resultToArray ($result);
	}

	function resultToArray ($result){
		$array = array();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
?>