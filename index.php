<?php
// on se connecte à MySQL
$db = mysql_connect('localhost', 'dbnavbat', 'batpass');

// on sélectionne la base
mysql_select_db('dbnavbat',$db);

// on crée la requête SQL
$sql = 'SELECT * FROM Users';

// on envoie la requête
$req = mysql_query($sql, $db) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
    {
    // on affiche les informations de l'enregistrement en cours
        print_r($data);
    }

// on ferme la connexion à mysql
mysql_close();
?> 