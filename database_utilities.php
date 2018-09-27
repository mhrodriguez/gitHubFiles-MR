<?php 
	
	include_once "connection.php";




//comentarios





	 ertetert


	 ert
	 echo "te
	 te
	 database_utilities.php5t
	 56


	 ";
	function count_users(){
		global $pdo;
		$users = $pdo->prepare("SELECT COUNT(*) FROM user");
		$users->execute();
		return $users->fetchColumn();
	}
	function count_types(){
		global $pdo;
		$types = $pdo->prepare("SELECT COUNT(*) FROM user_type");
		$types->execute();
		return $types->fetchColumn();
	}
	function count_status(){
		global $pdo;
		$status = $pdo->prepare("SELECT COUNT(*) FROM status");
		$status->execute();
		return $status->fetchColumn();
	}
	function count_access(){
		global $pdo;
		$accesos = $pdo->prepare("SELECT COUNT(*) FROM user_log");
		$accesos->execute();
		return $accesos->fetchColumn();
	}
	function count_active(){
		global $pdo;
		$active = $pdo->prepare("SELECT COUNT(*) FROM user WHERE status_id = 1");
		$active->execute();
		return $active->fetchColumn();
	}
	function count_inactive(){
		global $pdo;
		$inactive = $pdo->prepare("SELECT COUNT(*) FROM user WHERE status_id = 2");
		$inactive->execute();
		return $inactive->fetchColumn();
	}

	function selectAllFromTable($tabla){
		global $pdo;
		$tabla = $pdo->prepare("SELECT * FROM $tabla");
		$tabla->execute();
		return $tabla->fetchAll();
	}



 ?>