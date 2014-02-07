<nav>
    <ul>
        <li><a href="index.php">Acceuil</a></li>
        <?php
            if(isset($_SESSION['login']) && isset($_SESSION['password'])){
                echo '<li><a href="site/action/logout.php">Se deconnecter</a></li>';
            }else{
                echo '<li><a href="index.php?loginpg">Se connecter</a></li>';
            }
        ?>
    </ul>
</nav>