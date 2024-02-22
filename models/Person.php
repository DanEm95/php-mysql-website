<?php
# Person.php
require_once "iDatanbank.php";

class Person implements iDatenbank
{
	//Attribute 
	private $id; 
	private $anrede;
	private $vorname;
	private $nachname;
	private $strasse; 
	private $hausnr;
	private $ort;
	private $plz;
	private $email;
	private $password;
	
	 
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
	
	public function getAnrede()
	{
		return $this->anrede;
	}

	public function setAnrede($param)
	{
		$this->anrede = $param;
	}
	
	public function getVorname()
	{
		return $this->vorname;
	}

	public function setVorname($param)
	{
		$this->vorname = $param;
	}
	public function getNachname()
	{
		return $this->nachname;
	}

	public function setNachname($param)
	{
		$this->nachname = $param;
	}
	
		
	public function getStrasse()
	{
		return $this->strasse;
	}

	public function setStrasse($param)
	{
		$this->strasse = $param;
	}
	
	public function getHausnr()
	{
		return $this->hausnr;
	}

	public function setHausnr($param)
	{
		$this->hausnr = $param;
	}
	
	public function getOrt()
	{
		return $this->ort;
	}

	public function setOrt($param)
	{
		$this->ort = $param;
	}
	
	public function getPlz()
	{
		return $this->plz;
	}

	public function setPlz($param)
	{
		$this->plz = $param;
	}
	
	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($param)
	{
		$this->email = $param;
	}
	
	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($param)
	{
		$this->password = $param;
	}
	

	function insert($db)
	{# done
		$sql= "INSERT INTO personen (anrede, vorname, nachname, strasse, hausnr, ort, plz, email, password)
		VALUES(:anrede, :vorname, :nachname, :strasse, :hausnr, :ort, :plz, :email, :password)";
		$password_hashed = password_hash($this->password, PASSWORD_DEFAULT);
		$daten =
		[
			':anrede' =>$this->anrede,
			':vorname' =>$this->vorname,
			':nachname' =>$this->nachname,
			':strasse' => $this->strasse,
			':hausnr' => $this->hausnr,
			':ort' => $this->ort,
			':plz' => $this->plz,
			':email' => $this->email,
			':password' => $password_hashed
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Person wurde erfolgreich eingetragen<br>";
	}
	
	function update($db, $id)
	{# done
		$sql = "UPDATE personen SET anrede = :anrede, vorname = :vorname, nachname = :nachname, strasse = :strasse , hausnr = :hausnr, ort = :ort, plz = :plz, email = :email, password = :password WHERE id=:id";
		$password_hashed = password_hash($this->password, PASSWORD_DEFAULT);
		$daten = 
		[
			':id' => $id,
			':anrede' =>$this->anrede,	
			':vorname' =>$this->vorname,	
			':nachname' =>$this->nachname,
			':strasse' => $this->strasse,
			':hausnr' => $this->hausnr,
			':ort' => $this->ort,
			':plz' => $this->plz,
			':email' => $this->email,
			':password' => $password_hashed
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Person wurde erfolgreich editiert<br>";
	}
	
	function delete($db, $id)
	{# done
		$sql = "DELETE FROM personen WHERE id = :id ";
		$daten = 
		[
			':id' => $id
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Person wurde erfolgreich gelöscht<br>";
	}
	
	function select($db, $id)
	{# done
		$sql = "SELECT * FROM personen WHERE id = :id ";
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
		$sql = 'SELECT * FROM personen';
		$stmt = $db->prepare($sql);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $result)
		{
			$results[] = New Person($result);
		}
		return $results;
	}
	
	function updatePw($db, $id)
	{# done
		$sql = "UPDATE personen SET password = :password WHERE id=:id";
		$password_hashed = password_hash($this->password, PASSWORD_DEFAULT);
		$daten = 
		[
			':id' => $id,
			':password' => $password_hashed
		];
		$stmt = $db->prepare($sql);
		$stmt->execute($daten);
		$message="Password wurde erfolgreich editiert<br>";
	}
}
?>
