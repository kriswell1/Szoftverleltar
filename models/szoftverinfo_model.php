<?php

class Szoftverinfo_Model
{
	public function get_data($vars)
	{
		$retData=array();
		try {
			$connection = Database::getConnection();
			$sql = "select nev, kategoria from szoftver order by szoftverid";
			$stmt = $connection->query($sql);
			$retData = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>

