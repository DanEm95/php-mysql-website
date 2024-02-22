<html>  
<head>  
<title> Pagination </title>  
</head>  
<body>  
 
<h1>Liste der Seminare</h1>
<table>
<tr>
	<th>Id</th>
	<th>Titel</th>
	<th>Beschreibung</th>
	<th>Preis</th>
	<th>Kategorie</th>
	<th>Show</th>
</tr>
<?php  
  require_once "include/datenbank.php";
  require_once "include/functions.php";  
    //define total number of results you want per page  
    $results_per_page = 10;  
  
    //find the total number of results stored in the database  
    $sql = "select * from seminare";  
    $db->prepare($sql); 
	
	$sql1 = "select COUNT(*) AS anzahl from seminare";
	$db->prepare($sql1);
	$result = $db->query($sql1);
	
	$count = $result->fetch()['anzahl'];	
    #$number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($count / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $sql = "SELECT seminare.id,titel,beschreibung,preis,kategorien FROM seminare JOIN kategorien ON kategorien_id=kategorien.id LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = $db->query($sql); 

    //display the retrieved result on the webpage  
	$all = $result->fetchAll();

$ausgabe = '';
	foreach($all AS $row)
	{
        $ausgabe .= '<tr><td>' . $row['id'] . '</td><td>' . $row['titel'] . '</td><td>' . $row['beschreibung'] . '</td><td>' . $row['kategorien'] . '</td><td>' . $row['preis'] .'</tr>';
}	
$ausgabe .= '</table><br>';
 echo $ausgabe; 
    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a style="display:inline-block;width:1.5em;height:1.5em;border:1px solid blue;margin-right:1.5em;text-align:center;color:darkblue;background-color:#fc8;" href="pagination.php?page=' . $page . '">' . $page . ' </a>';  
    }  
?>  
</body>  
</html>  