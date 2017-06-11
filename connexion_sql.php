<?php
// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', '020061647');

// on sélectionne la base
mysql_select_db('Musth',$db);
?>
<?php try {$bdd = new PDO('mysql:host=localhost;dbname=Musth', 'root', '020061647');} catch(Exception $e) {die('Erreur : '.$e->getMessage());} ?>
