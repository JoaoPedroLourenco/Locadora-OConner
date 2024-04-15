<?php
    require_once "topo.php";
?>

<?php
// navegação do site
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        // echo "Escolhi a página " .$p;
        switch($p){
            case 1: require_once "meio.php";
            break;
            case 2: require_once "meio.php";
            break;
            case 3: require_once "meio.php";
            break;
            default: require_once "404.php";
        }
    }
    else{
        require_once "meio.php";
    }
?>