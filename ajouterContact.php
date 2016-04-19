<?php
//Connexion à la base de données
include_once('connection.php');
//require_once('connection.php')



$nom= filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$adresse=filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
$telephone= filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
$siteWeb=filter_input(INPUT_POST, 'siteWeb', FILTER_SANITIZE_STRING);
$nomPhoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./images/$nomPhoto");
//excution de la requete Insert(inserer un contact)
$sql="INSERT INTO contacts(NOM,EMAIL,ADRESSE,TELEPHONE,SITEWEB,PHOTO) 
        values('$nom','$email','$adresse','$telephone','$siteWeb','$nomPhoto')";

$dbh->exec($sql);
?>
<table border="1">
    <tr>
        <td>Nom:</td>
        <td><?php echo $nom ?></td>
    </tr>
    
      <tr>
        <td>Email:</td>
        <td><?php echo $email ?></td>
    </tr>
    
      <tr>
        <td>Adresse:</td>
        <td><?php echo ($adresse)?></td>
    </tr>
      <tr>
        <td>Telephone:</td>
        <td><?php echo ($telephone) ?></td>
    </tr>
      <tr>
        <td>Site Web:</td>
        <td><?php echo ($siteWeb) ?></td>
    </tr>
      <tr>
        <td>Photo</td>
        <td><img src="images/<?php echo $nomPhoto ?>"></td>
    </tr>
    
 
</table>
