<?php
# Termin.php
require_once "iDatanbank.php";

class Termin implements iDatenbank
{
	//Attribute 
	private $id; 
	private $seminare_id;
	private $beginn;
	private $ende;
	private $standorte_id;
	private $raum;
	
	 
	//constructor  magische Methode
	//initialisiert die Attribute
	function __construct(Array $daten = null)
	{
		$this->set_daten($daten);
	}
	
	function set_daten($daten)
	{
		if (!is_array($daten)) {
			return;
		}

		foreach ($daten as $key => $value) {
			$setter = "set" . ucfirst($key);

			if (method_exists($this, $setter)) {
				if (is_array($value)) {
					$this->$setter($this->set_daten($value));
				} else {
					$this->$setter($value);
				}
			}
		}
	}

	//Setter && Getter
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setId($param)
	{
		$this->id = $param;
	}
	
	public function getSeminare_id()
	{
		return $this->seminare_id;
	}

	public function setSeminare_id($param)
	{
		$this->seminare_id = $param;
	}
	
	public function getBeginn()
	{
		return $this->beginn;
	}

	public function setBeginn($param)
	{
		$this->beginn = $param;
	}
	public function getEnde()
	{
		return $this->ende;
	}

	public function setEnde($param)
	{
		$this->ende = $param;
	}
	
	public function getStandorte_id()
	{
		return $this->standorte_id;
	}

	public function setStandorte_id($param)
	{
		$this->standorte_id = $param;
	}
	
	public function getRaum()
	{
		return $this->raum;
	}

	public function setRaum($param)
	{
		$this->raum = $param;
	}
	
	
	function insert($db)
	{# done
		$sql = "INSERT INTO `termine` (seminare_id,beginn,ende,standorte_id,raum)VALUE(:seminare_id, :beginn, :ende, :standorte_id, :raum)";
		$daten = 
		[
			
			':seminare_id' =>$this->seminare_id,	
			':beginn' =>$this->beginn,	
			':ende' =>$this->ende,
			':standorte_id' => $this->standorte_id,
			':raum' => $this->raum
		];
		
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Termin wurde erfolgreich eingetragen<br>";
	}
	
	function update($db, $id)
	{# done
		$sql = "UPDATE `termine` SET seminare_id = :seminare_id, beginn = :beginn, ende = :ende, standorte_id = :standorte_id, raum = :raum WHERE id = :id ";
		$daten = 
		[
			':id' => $id,
			':seminare_id' =>$this->seminare_id,	
			':beginn' =>$this->beginn,	
			':ende' =>$this->ende,
			':standorte_id' => $this->standorte_id,
			':raum' => $this->raum
		];
		
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Termin wurde erfolgreich editiert<br>";
	}
	
	function delete($db, $id)
	{# done
		$sql = "DELETE FROM `termine`  WHERE id = :id ";
		$daten = 
		[
			':id' => $id
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Termin wurde erfolgreich gelöscht<br>";
		
	}	
	
	function select($db, $id)
	{# done
		$sql = "SELECT * FROM `termine`  WHERE id = :id ";
		$daten = 
		[
			'id' =>$id	
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$result = $stmt->fetch();
		return $result;
	}
	
	function selectAll($db)
	{# done
		$sql = "SELECT * FROM termine";
		$stmt = $db-> prepare($sql);
		$stmt-> execute();
		foreach ($stmt->fetchAll() as $result) 
		{
			$results[] = new Termin($result);
		}
		return $results;
	}
		
		
	#meine termine test
	function selectPerson($db) {
	$sql = "SELECT titel,beginn,ende,standort,raum,seminare.preis 
			FROM seminare 
			JOIN termine 
			ON seminare_id = seminare.id
			JOIN standorte
			ON standorte_id = standorte.id 
			JOIN personen_termine
			ON termine_id = termine.id
			WHERE personen_id = 1; ";
	$stmt = $db-> prepare($sql);
	$stmt-> execute();
	foreach ($stmt->fetchAll() as $result) 
	{
		$results[] = new Termin($result);
	}
	return $results;
	}
	
}
?>
