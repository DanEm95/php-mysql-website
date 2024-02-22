<?php
# kategorien.php
require_once "iDatanbank.php";

class Kategorie implements iDatenbank
{
	//Attribute 
	private $id; 
	private $kategorien;
	
	
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
	
	public function getKategorien()
	{
		return $this->kategorien;
	}

	public function setKategorien($param)
	{
		$this->kategorien = $param;
	}
	
	
	function insert($db)
	{# done
		$sql = "INSERT INTO kategorien (kategorien)VALUE(:kategorien)";
		$daten = 
		[
			':kategorien' =>$this->kategorien
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Kategorie wurde erfolgreich eingetragen<br>";
	}
	
	function update($db, $id)
	{# done
		$sql = "UPDATE kategorien SET kategorien = :kategorien WHERE id = :id ";
		$daten = 
		[
			':id' => $id,
			':kategorien' =>$this->kategorien
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Kategorie wurde erfolgreich editiert<br>";
	}
	
	function delete($db, $id)
	{# done
		$sql = "DELETE FROM kategorien WHERE id = :id ";
		$daten =
		[
			':id' => $id
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Kategorie wurde erfolgreich gelöscht<br>";
	}
	
	
	function select($db, $id)
	{# done
		$sql = "SELECT * FROM kategorien WHERE id = :id ";
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
		$sql = "SELECT * FROM kategorien";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $result) 
		{
			$results[] = new Kategorie($result);
        }
		return $results;
    }
}
?>
