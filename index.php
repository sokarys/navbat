<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/sitejs.js"></script>
        <title></title>
    </head>
    <body>
        <?php include('site/header.php') ?>
        <?php include('site/menu.php') ?>
        <div id="content">
            <?php
                if(isset($_GET['loginpg'])){
                    include('site/loginpg.php');
                }else if(isset($_GET['logoutpg'])){
                    include('site/action/logout.php');
                }else if(isset($_GET['play'])){
                    echo 'Play';
                }
            ?>
        </div>
        <?php include('site/footer.php')?>
    </body>
</html>