<?php
    include("vues/v_menu.php");
    
    if ($_REQUEST['action'] == 'liste')
    {
        $lesProjets=$pdo-> getLesProjets();
        include("vues/v_listeProjets.php");
    }
    else 
    {
        $lesProjets=$pdo-> getLesProjetsDetail();
        include("vues/v_listeProjetsDetail.php");
    }
?>
