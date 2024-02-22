<?php
# Seminar.php
require_once "iDatanbank.php";

class Seminar implements iDatenbank
{
	//Attribute 
	private $id; 
	private $titel;
	private $beschreibung;
	private $preis;
	private $kategorien_id;
	
	 
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
	
	public function getTitel()
	{
		return $this->titel;
	}

	public function setTitel($param)
	{
		$this->titel = $param;
	}
	
	public function getBeschreibung()
	{
		return $this->beschreibung;
	}

	public function setBeschreibung($param)
	{
		$this->beschreibung = $param;
	}
	public function getPreis()
	{
		return $this->preis;
	}

	public function setPreis($param)
	{
		$this->preis = $param;
	}
	
	public function getKategorien_id()
	{
		return $this->kategorien_id;
	}

	public function setKategorien_id($param)
	{
		$this->kategorien_id = $param;
	}
	
	function insert($db)
	{# done
		$sql = "INSERT INTO seminare (titel,beschreibung,preis,kategorien_id)VALUES(:titel, :beschreibung, :preis, :kategorien_id)";
		$daten = 
		[
            ':titel' => $this->titel,
            ':beschreibung' =>$this->beschreibung,
            ':preis' => $this->preis,
            ':kategorien_id' =>$this->kategorien_id
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Seminar wurde erfolgreich eingetragen<br>";
	}
	
	function update($db, $id)
	{# done
		$sql = "UPDATE seminare SET titel = :titel, beschreibung = :beschreibung, preis = :preis, kategorien_id = :kategorien_id WHERE id = :id ";
        $daten = [
			':id' => $id,
            ':titel' => $this->titel,
            ':beschreibung' =>$this->beschreibung,
            ':preis' => $this->preis,
            ':kategorien_id' =>$this->kategorien_id            
        ];
		$stmt = $db->prepare($sql);
        $stmt->execute($daten);
		$message="Seminar wurde erfolgreich editiert<br>";
	}
	
	function delete($db, $id)
	{# done
		$sql = "DELETE FROM seminare WHERE id = :id ";
		$daten = 
		[
			':id' => $id
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Seminar wurde erfolgreich gelöscht<br>";
	}
	
	
	function select($db, $id)
	{# done
		$sql = "SELECT * FROM seminare WHERE id = :id ";
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
		$sql = "SELECT * FROM seminare";
		$stmt = $db-> prepare($sql);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $result) 
		{
			$results[] = new Seminar($result);
		}
		return $results;
	}
}
?>
