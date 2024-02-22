<?php
# Admin.php
require_once "iDatanbank.php";

class Admin implements iDatenbank
{
	//Attribute 
	private $user_id; 
	private $login;
	private $paswword;
	
	 
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
	
	public function getLogin()
	{
		return $this->login;
	}

	public function setLogin($param)
	{
		$this->login = $param;
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
	{}
	
	function update($db, $id)
	{}
	
	function delete($db, $id)
	{}
	
	function select($db, $id)
	{# done
		$sql = "SELECT * FROM admins WHERE id = :id ";
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
	{}
}
?>
