<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$passwort = '';
$dbname = "mvc3";

$options = array 
(
	PDO::ATTR_PERSISTENT => true,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::MYSQL_ATTR_USE_BUFFERED_QUERY=>true,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$dsn = "mysql:host=$servername;dbname=$dbname";

try {
 $db = new PDO($dsn, $username, $passwort, $options);
} catch (PDOException $e) {
 echo "Verbindung zur Datenbank fehlgeschlagen: " . $e->getMessage() . "<br>";
 echo "<hr>";
}
?>
<?php
// Step 3: Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Step 4: Create a prepared statement
    $sql = "SELECT * FROM personen WHERE vorname LIKE :term";
	$daten = [];
	$stmt = $db->prepare($sql);
	$stmt->execute($daten);
	$result = $stmt->fetch();

    // Step 5: Execute the prepared statement
    $term = '%' . $_POST['term'] . '%';
    $stmt->execute(['term' => $term]);

    // Step 6: Fetch and display the results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
        echo $row['vorname'] . '<br>';
    }
}
?>

<!-- Step 2: Display the form -->
<form action="" method="post">
    Search: <input type="text" name="term" /><br />
    <input type="submit" value="Submit" />
</form>

