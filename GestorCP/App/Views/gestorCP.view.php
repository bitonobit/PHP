<?php  
session_start();
if(empty($_SESSION)){
    $_SESSION['Admin_GestorCP']='';
}
        
    require_once(__DIR__ . '/navbar.view.php');
    require_once(__DIR__ . '/login.view.php');
    require_once(__DIR__ . '/footer.view.php');

?>

    