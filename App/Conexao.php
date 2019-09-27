<?php 
namespace App;

require_once "Conecta.php";

class Conexao
{

	private $db;
	public function __construct()
	{
		try{
			$this->db = PDO_CONNECTION();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function returnAll($table,$where = "")
	{
		$sql = "SELECT * FROM {$table}";
		if(!(empty($where))){
			$sql .= " WHERE nome=:where";
		}

		$list = $this->db->prepare($sql);

		if(empty($where)){
			$list->execute();
		}else{
			$list->execute([
				":where"=>$where
			]);
		}

		return $list->fetchAll();
	}
}