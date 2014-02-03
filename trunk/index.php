<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <header>
            <?php include('site/header.php') ?>
        </header>
        <div id="content">
            <?php
                if(isset($_GET['loginpg'])){
                    require_once('site/login.php');
                }else if(isset($_GET['play'])){
                    echo 'Play';
                }else{
                    echo '<a href="index.php?loginpg">Se connecter</a>';
                }
            ?>
        </div>
        <footer>
            <?php include('site/footer.php')?>
        </footer>
    </body>
</html>