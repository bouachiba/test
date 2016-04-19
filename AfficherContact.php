<?php
//Connexion à la base de données
include_once('connection.php');
// création de la requête SQL
$sql="SELECT *FROM contacts";

// Exécution de la requête SQL
$sth = $dbh->query($sql);
$result=@mysql_query($sql,$sth);
if(!$result)
{
echo "Lecture impossible";
}
else
{
$nbcol=mysql_num_fields($result);
$nbmod=mysql_num_rows($result); 
?>

<html>
<body>

    <table border="1">


<body>
<?php

//$idcom=connex("voitures","myparam")
//$requete="SELECT * FROM modele ORDER BY modele";
//$result=@mysql_query($requete,$idcom);



echo "<table border=\"1\">";
echo "<th>NOM</th> <th>EMAIL</th><th>ADRESSE</th>
<th>TELEPHONE</th> <th>SITEWEB</th>";
while($ligne=mysql_fetch_array($result,MYSQL_NUM))
{
 echo "<tr>";
 foreach($ligne as $valeur)
 {
 echo "<td> $valeur </td>";
 }
 echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html> 