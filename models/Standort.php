<?php
# Standort.php
require_once "iDatanbank.php";

class Standort implements iDatenbank
{
	//Attribute 
	private $id;
	private $standort;
	
	 
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
	
	public function getStandort()
	{
		return $this->standort;
	}

	public function setStandort($param)
	{
		$this->standort = $param;
	}
			
	
	function insert($db)
	{# done
		$sql = "INSERT INTO standorte (standort)VALUES(:standort)";
		$daten = 
		[
			':standort' =>$this->standort
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Standort wurde erfolgreich eingetragen<br>";
	}
	
	function update($db, $id)
	{# done
		$sql = "UPDATE standorte SET standort = :standort WHERE id=:id";
		$daten = 
		[
			':id' => $id,
			':standort' =>$this->standort
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Standort wurde erfolgreich editiert<br>";
	}
	
	function delete($db, $id)
	{# done
		$sql = "DELETE FROM standorte  WHERE id = :id ";
		$daten =
		[
			':id' => $id
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Standort wurde erfolgreich gelöscht<br>";
	}
	
	
	function select($db, $id)
	{# done
		$sql = "SELECT * FROM standorte WHERE id = :id ";
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
		$sql = "SELECT * FROM standorte ORDER BY id";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $result) 
		{
			$results[] = new Standort($result);
        }
		return $results;
    }
}
?>
