    
<?php

session_start();
if (!isset($_SESSION['authenticate']) && $_SESSION['authenticate']!=true) {
    
    header('Location: loginAdmin.php');
}else{

    include "navbar.php";
    exit;

}


 ?>