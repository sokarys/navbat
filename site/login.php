<?php
        if(isset($_POST['login']) && isset($_POST['pwd'])){
            echo 'Bonjour '.$_POST['login'];
        }else{
?>

            <div id="login" class="voirDiv">
            <form action="index.php?loginpg" method="POST">
                <table id="tablelogin">
                    <tr>
                        <td>
                            <label for="login">Login</label>
                        </td>
                        <td>
                            <input type="text" name="login"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="pwd">Password</label>
                        </td>
                        <td>
                            <input type="password" name="pwd"><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" value="Login">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
<?php
    }
?>


<?php
// on se connecte √† MySQL
/*$db = mysql_connect('localhost', 'dbnavbat', 'batpass');

// on s√©lectionne la base
mysql_select_db('dbnavbat',$db);

// on cr√©e la requ√™te SQL
$sql = 'SELECT * FROM Users';

// on envoie la requ√™te
$req = mysql_query($sql, $db) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

// on fait une boucle qui va faire un tour pour chaque enregistrement
while($data = mysql_fetch_assoc($req))
    {
    // on affiche les informations de l'enregistrement en cours
        print_r($data);
    }

// on ferme la connexion √† mysql
mysql_close();*/
?> 