<?php
if(isset($_POST['login']) && isset($_POST['pwd'])){
            //On demare une session et on save login passord dans la session.
            session_start();
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['pwd'];
            header('location: ../../index.php');
}else{
    echo 'Var not defined';
}
?>
